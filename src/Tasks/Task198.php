<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/house-robber/
 * 92.31/84.62
 */
final class Task198
{
    /**
     * @param int[] $nums
     */
    public function rob(array $nums): int
    {
        $n = count($nums);
        if ($n <= 2) {
            return max($nums);
        }

        $result = [$nums[0], $nums[1]];
        for ($i = 2; $i < $n; $i++) {
            $result = [max($result), max($result[1], $result[0] + $nums[$i])];
        }

        return $result[1];
    }
}
