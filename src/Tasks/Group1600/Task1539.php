<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

/**
 * https://leetcode.com/problems/kth-missing-positive-number/
 * 55/30.
 */
final class Task1539
{
    /**
     * @param int[] $arr
     */
    public function findKthPositive(array $arr, int $k): int
    {
        $left = 0;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $current = intdiv($right + $left, 2);
            if ($arr[$current] - ($current + 1) >= $k) {
                $right = $current - 1;
            } else {
                $left = $current + 1;
            }
        }

        return $left + $k;
    }
}
