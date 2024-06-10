<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

/**
 * https://leetcode.com/problems/removing-stars-from-a-string/.
 */
final class Task2390
{
    public function removeStars(string $s): string
    {
        $stack = [];

        for ($i = 0; $i < strlen($s); ++$i) {
            if ($s[$i] === '*') {
                array_pop($stack);
            } else {
                $stack[] = $s[$i];
            }
        }

        return implode('', $stack);
    }
}
