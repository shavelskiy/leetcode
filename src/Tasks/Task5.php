<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/longest-palindromic-substring/
 * 9.13/81.73.
 */
final class Task5
{
    public function longestPalindrome(string $s): string
    {
        for ($i = strlen($s); $i > 0; $i--) {
            $j = 0;
            while ($j + $i <= strlen($s)) {
                $tmp = substr($s, $j, $i);
                if ($this->isPolindrom($tmp)) {
                    return $tmp;
                }
                $j++;
            }
        }

        return '';
    }

    private function isPolindrom(string $s): bool
    {
        while (strlen($s) > 1) {
            if ($s[0] !== $s[strlen($s) - 1]) {
                return false;
            }

            $s = substr($s, 1);
            $s = substr($s, 0, strlen($s) - 1);
        }

        return true;
    }
}
