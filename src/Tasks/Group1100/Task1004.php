<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

/**
 * https://leetcode.com/problems/max-consecutive-ones-iii/.
 * 37.84/91.89.
 */
final class Task1004
{
    /**
     * @param int[] $nums
     */
    public function longestOnes(array $nums, int $k): int
    {
        $n = count($nums);

        $left = 0;
        $max = null;

        for ($right = 0; $right < $n; ++$right) {
            if ($nums[$right] === 0) {
                --$k;
            }

            while ($k < 0 && $left < $n) {
                if ($nums[$left] === 0) {
                    ++$k;
                }
                ++$left;
            }

            if ($k >= 0 && $right >= $left && ($right - $left > $max || $max === null)) {
                $max = $right - $left;
                if ($n - $left < $max) {
                    break;
                }
            }
        }

        return ($max ?? -1) + 1;
    }
}
