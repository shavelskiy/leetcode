<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/largest-perimeter-triangle/
 * 66.67/81.48
 */
final class Task976
{
    /**
     * @param int[] $nums
     */
    public function largestPerimeter(array $nums): int
    {
        sort($nums);

        for ($i = count($nums) - 1; $i > 1; $i--) {
            if ($nums[$i] < $nums[$i - 1] + $nums[$i - 2]) {
                return $nums[$i] + $nums[$i - 1] + $nums[$i - 2];
            }
        }

        return 0;
    }
}
