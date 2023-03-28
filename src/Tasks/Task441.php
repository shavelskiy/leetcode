<?php

namespace App\Tasks;

/**
 * https://leetcode.com/problems/arranging-coins/
 * 88.24/58.82
 */
class Task441
{
    public function arrangeCoins(int $n): int
    {
        $left = 0;
        $right = $n;

        while ($left <= $right) {
            $current = intdiv($left + $right, 2);

            if ($current % 2 === 0) {
                $k = (int)(ceil(($current - 1) / 2) * ($current - 1)) + $current;
            } else {
                $k = (int)(ceil($current / 2) * $current);
            }

            if ($k <= $n && $k + $current + 1 > $n) {
                return $current;
            }

            if ($k > $n) {
                $right = $current - 1;
            } else {
                $left = $current + 1;
            }
        }

        return 0;
    }
}
