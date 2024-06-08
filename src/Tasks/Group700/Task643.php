<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/maximum-average-subarray-i.
 * 20.61/49.09.
 */
final class Task643
{
    /**
     * @param int[] $nums
     */
    public function findMaxAverage(array $nums, int $k): float
    {
        $sum = $nums[0];

        if (count($nums) < 2) {
            return $sum / $k;
        }

        $left = 0;
        $right = 0;

        $max = null;

        while ($right < count($nums) - 1) {
            if ($right - $left + 1 < $k) {
                ++$right;
                $sum += $nums[$right];

                if ($right - $left + 1 === $k) {
                    $max = $sum;
                }
                continue;
            }

            $sum -= $nums[$left];
            ++$left;
            ++$right;
            $sum += $nums[$right];
            if ($sum > $max) {
                $max = $sum;
            }
        }

        return ($max ?? $sum) / $k;
    }
}
