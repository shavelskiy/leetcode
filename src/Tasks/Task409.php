<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/longest-palindrome/
 * 83.46/80.31
 */
final class Task409
{
    public function longestPalindrome(string $s): int
    {
        $n = strlen($s);
        $map = [];
        for ($i = 0; $i < $n; $i++) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
        }

        $result = 0;
        $has = false;
        foreach ($map as $item) {
            if ($item % 2 > 0) {
                $has = true;
                $item--;
            }

            $result += $item;
        }

        return $result + ($has ? 1 : 0);
    }
}
