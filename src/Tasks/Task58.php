<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/length-of-last-word/
 * 100/81.63
 */
final class Task58
{
    public function lengthOfLastWord(string $s): int
    {
        $parts = explode(' ', trim($s));
        return strlen($parts[count($parts) - 1]);
    }
}
