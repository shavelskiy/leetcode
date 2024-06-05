<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/maximum-product-subarray/
 * 33.33/54.17.
 */
final class Task152
{
    /**
     * @param int[] $nums
     */
    public function maxProduct(array $nums): int
    {
        $max = $nums[0];
        $currentMin = 1;
        $currentMax = 1;

        foreach ($nums as $n) {
            $tmp = $currentMax * $n;
            $currentMax = max($currentMax * $n, $currentMin * $n, $n);
            $currentMin = min($tmp, $currentMin * $n, $n);

            $max = max($max, $currentMax);
        }

        return $max;
    }
}
