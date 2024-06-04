<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-pivot-index/
 * 46.98/84.25.
 */
final class Task724
{
    /**
     * @param int[] $nums
     */
    public function pivotIndex(array $nums): int
    {
        $i = 0;

        $left = 0;
        $right = 0;

        for ($j = 1; $j < count($nums); ++$j) {
            $right += $nums[$j];
        }

        while ($i < count($nums)) {
            if ($left === $right) {
                return $i;
            }

            $left += $nums[$i];

            if ($i === count($nums) - 1) {
                $right = 0;
            } else {
                $right -= $nums[$i + 1];
            }

            ++$i;
        }

        return -1;
    }
}
