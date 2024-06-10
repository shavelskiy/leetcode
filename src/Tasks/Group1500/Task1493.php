<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

/**
 * https://leetcode.com/problems/longest-subarray-of-1s-after-deleting-one-element/.
 * 81.25/87.50.
 */
final class Task1493
{
    /**
     * @param int[] $nums
     */
    public function longestSubarray(array $nums): int
    {
        $n = count($nums);

        $left = 0;
        $max = 0;
        $countZero = 0;

        for ($right = 0; $right < $n; ++$right) {
            if ($nums[$right] === 0) {
                ++$countZero;
            }

            while ($countZero > 1) {
                if ($nums[$left] === 0) {
                    --$countZero;
                }
                ++$left;
            }

            if ($right - $left > $max) {
                $max = $right - $left;
            }
        }

        return $max;
    }
}
