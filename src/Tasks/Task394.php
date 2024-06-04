<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/decode-string/
 * 91.67/66.67.
 */
final class Task394
{
    public function decodeString(string $s): string
    {
        $stack = [];
        $current = '';
        $digital = null;

        $n = strlen($s);

        for ($i = 0; $i < $n; ++$i) {
            $char = $s[$i];

            if ($char === '[') {
                $stack[] = $digital === true ? (int)$current : $current;
                $current = '';
                $digital = null;
                continue;
            }

            if ($char === ']') {
                while (is_string($element = array_pop($stack))) {
                    $current = $element . $current;
                }

                $stack[] = str_repeat($current, $element);
                $current = '';
                $digital = null;
                continue;
            }

            if (ord($char) <= 57) {
                if ($digital === false) {
                    $stack[] = $current;
                    $current = '';
                }

                $current .= $char;
                $digital = true;
                continue;
            }

            if ($digital === true) {
                $stack[] = (int)$current;
                $current = '';
            }

            $current .= $char;
            $digital = false;
        }

        return implode('', $stack) . $current;
    }
}
