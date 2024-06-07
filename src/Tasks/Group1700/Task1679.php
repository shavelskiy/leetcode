<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

/**
 * https://leetcode.com/problems/max-number-of-k-sum-pairs/.
 * 52.78/25.00.
 */
final class Task1679
{
    /**
     * @param int[] $nums
     */
    public function maxOperations(array $nums, int $k): int
    {
        $result = 0;

        sort($nums);

        $left = 0;
        $right = count($nums) - 1;

        while ($left < $right) {
            $sum = $nums[$left] + $nums[$right];

            if ($sum < $k) {
                ++$left;
            } elseif ($sum > $k) {
                --$right;
            } else {
                ++$result;
                ++$left;
                --$right;
            }
        }

        return $result;
    }
}
