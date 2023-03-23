<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/palindrome-number/
 * 57.61/15.50
 */
final class Task9
{
    public function isPalindrome(int $x): bool
    {
        if ($x < 0) {
            return false;
        }

        $current = (string)$x;
        while (strlen($current) > 1) {
            if ($current[0] !== $current[strlen($current) - 1]) {
                return false;
            }

            $current = substr($current, 1, strlen($current) - 2);
        }

        return true;
    }
}
