<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/longest-substring-without-repeating-characters/
 * 11.12/34.17
 */
final class Task3
{
    public function lengthOfLongestSubstring(string $s): int
    {
        $max = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $j = $i;
            $tmp = [];
            while (isset($s[$j]) && !in_array($s[$j], $tmp, true)) {
                $tmp[] = $s[$j];
                $j++;
            }

            $max = count($tmp) > $max ? count($tmp) : $max;
        }

        return $max;
    }
}
