<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/house-robber-ii/
 * 50/75.
 */
final class Task213
{
    /**
     * @param int[] $nums
     */
    public function rob(array $nums): int
    {
        $n = count($nums);
        if ($n <= 3) {
            return max($nums);
        }

        $result1 = [0, $nums[1]];
        $result2 = [$nums[0], 0];
        for ($i = 2; $i < $n; ++$i) {
            $result1 = [max($result1), max($result1[1], $result1[0] + $nums[$i])];

            if ($i !== $n - 1) {
                $result2 = [max($result2), max($result2[1], $result2[0] + $nums[$i])];
            }
        }

        return max($result1[1], $result2[1]);
    }
}
