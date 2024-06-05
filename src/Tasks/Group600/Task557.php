<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

/**
 * https://leetcode.com/problems/reverse-words-in-a-string-iii/
 * 53.62/57.97.
 */
final class Task557
{
    public function reverseWords(string $s): string
    {
        $parts = explode(' ', $s);
        foreach ($parts as $key => $part) {
            $parts[$key] = strrev($part);
        }

        return implode(' ', $parts);
    }
}
