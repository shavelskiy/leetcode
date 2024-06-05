<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/find-minimum-in-rotated-sorted-array/
 * 38.98/81.36.
 */
final class Task153
{
    /**
     * @param int[] $nums
     */
    public function findMin(array $nums): int
    {
        $n = count($nums) - 1;
        $start = 0;
        $end = $n;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);

            if ($current > 0 && $nums[$current] < $nums[$current - 1]) {
                return $nums[$current];
            }

            if ($current === $n) {
                return $nums[0];
            }

            if ($nums[$current] >= $nums[0]) {
                $start = $current + 1;
            } else {
                $end = $current - 1;
            }
        }

        return $nums[$end];
    }
}
