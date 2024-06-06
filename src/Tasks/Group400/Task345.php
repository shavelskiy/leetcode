<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/reverse-vowels-of-a-string/.
 * 65.98/54.61.
 */
final class Task345
{
    private const CHARS = ['a', 'e', 'i', 'o', 'u'];

    public function reverseVowels(string $s): string
    {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            if (!$this->match($s[$left])) {
                ++$left;
            } elseif (!$this->match($s[$right])) {
                --$right;
            } else {
                $temp = $s[$left];
                $s[$left] = $s[$right];
                $s[$right] = $temp;
                ++$left;
                --$right;
            }
        }

        return $s;
    }

    private function match(string $char): bool
    {
        return in_array(strtolower($char), self::CHARS, true);
    }
}
