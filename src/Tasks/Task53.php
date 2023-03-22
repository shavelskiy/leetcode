<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/maximum-subarray.
 * 63.87/67.23.
 */
final class Task53
{
    /**
     * @param int[] $nums
     */
    public function maxSubArray(array $nums): int
    {
        $n = count($nums);
        $maxSum = $nums[0];
        $currentSum = $nums[0];

        for ($i = 1; $i < $n; $i++) {
            $num = $nums[$i];
            if ($currentSum + $num > $num) {
                $currentSum += $num;
            } else {
                $currentSum = $num;
            }

            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
            }
        }

        return $maxSum;
    }
}
