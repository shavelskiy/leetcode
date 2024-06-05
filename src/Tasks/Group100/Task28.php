<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/
 * 51.42/95.09.
 */
final class Task28
{
    public function strStr(string $haystack, string $needle): int
    {
        $needleLength = strlen($needle);
        $iterations = strlen($haystack) - $needleLength;

        for ($i = 0; $i <= $iterations; ++$i) {
            if ($haystack[$i] === $needle[0]) {
                if (substr($haystack, $i, $needleLength) === $needle) {
                    return $i;
                }
            }
        }

        return -1;
    }
}
