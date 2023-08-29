<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/add-binary/
 * 79.59/62.25
 */
final class Task67
{
    public function addBinary(string $a, string $b): string
    {
        $result = '';

        $i = strlen($a) - 1;
        $j = strlen($b) - 1;

        $accumulator = false;
        while ($i >= 0 || $j >= 0) {
            $v1 = ($i >= 0 ? $a[$i] : '0') === '1';
            $v2 = ($j >= 0 ? $b[$j] : '0') === '1';

            if ($v1 === $v2) {
                $result .= $accumulator ? '1' : '0';
                $accumulator = $v1;
            } else {
                $result .= $accumulator ? '0' : '1';
            }

            $i--;
            $j--;
        }

        $result .= $accumulator ? '1' : '';

        return strrev($result);
    }
}
