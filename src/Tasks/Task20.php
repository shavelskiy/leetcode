<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/valid-parentheses/
 * 43.63/100.
 */
final class Task20
{
    private const MAP = [
        ')' => '(',
        ']' => '[',
        '}' => '{',
    ];

    public function isValid(string $s): bool
    {
        $n = strlen($s);
        $stack = [];

        for ($i = 0; $i < $n; ++$i) {
            if (in_array($s[$i], self::MAP, true)) {
                $stack[] = $s[$i];
                continue;
            }

            if (self::MAP[$s[$i]] !== array_pop($stack)) {
                return false;
            }
        }

        return empty($stack);
    }
}
