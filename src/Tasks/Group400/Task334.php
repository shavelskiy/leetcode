<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/increasing-triplet-subsequence/.
 * 36.36/61.82.
 */
final class Task334
{
    /**
     * @param int[] $nums
     */
    public function increasingTriplet(array $nums): bool
    {
        if (count($nums) < 3) {
            return false;
        }

        $min1 = null;
        $min2 = null;
        for ($i = 0; $i < count($nums); ++$i) {
            if ($nums[$i] <= $min1 || $min1 === null) {
                $min1 = $nums[$i];
            } elseif ($nums[$i] <= $min2 || $min2 === null) {
                $min2 = $nums[$i];
            } else {
                return true;
            }
        }

        return false;
    }
}
