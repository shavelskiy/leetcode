<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/count-odd-numbers-in-an-interval-range/
 * 92.95/47.42.
 */
final class Task1523
{
    public function countOdds(int $low, int $high): int
    {
        $result = 0;
        if ($low % 2 === 0) {
            --$low;
        } else {
            ++$result;
        }

        if ($high % 2 === 0) {
            ++$high;
        } else {
            ++$result;
        }

        return $result + ($high - $low) / 2 - 1;
    }
}
