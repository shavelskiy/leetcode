<?php

declare(strict_types=1);

namespace App\Tasks;

final class Task918
{
    /**
     * @param int[] $nums
     */
    public function maxSubarraySumCircular(array $nums): int
    {
        $n = count($nums);

        $max1 = $nums[0];
        $current1 = $nums[0];
        $max2 = -1 * $max1;
        $current2 = -1 * $current1;
        $sum = $nums[0];
        for ($i = 1; $i < $n; ++$i) {
            $value = $nums[$i];
            $sum += $value;

            $current1 = max($current1 + $value, $value);
            $max1 = max($max1, $current1);

            $current2 = max($current2 + (-1 * $value), -1 * $value);
            $max2 = max($max2, $current2);
        }

        if ($max2 + $sum === 0) {
            return $max1;
        }

        return max($max1, $max2 + $sum);
    }
}
