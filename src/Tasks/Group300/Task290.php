<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * 100/24.56
 * https://leetcode.com/problems/word-pattern/.
 */
final class Task290
{
    public function wordPattern(string $pattern, string $s): bool
    {
        $words = explode(' ', $s);

        if (count($words) !== strlen($pattern)) {
            return false;
        }

        $map = [];

        for ($i = 0; $i < strlen($pattern); ++$i) {
            $char = $pattern[$i];
            $word = $words[$i];

            if (!isset($map[$char])) {
                if (in_array($word, $map, true)) {
                    return false;
                }

                $map[$char] = $word;
            } elseif ($map[$char] !== $word) {
                return false;
            }
        }

        return true;
    }
}
