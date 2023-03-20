<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/two-sum/
 * 48.62/55.36.
 */
final class Task1
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
    {
        $count = count($nums);
        for ($i = 0; $i <= $count; $i++) {
            for ($j = $i + 1; $j <= $count; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }

        return [];
    }
}
