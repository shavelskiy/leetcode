<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/trapping-rain-water/
 * 94.29/42.86
 */
final class Task42
{
    /**
     * @param int[] $height
     */
    public function trap(array $height): int
    {
        $result = 0;

        $leftMax = 0;
        $rightMax = 0;

        $left = 0;
        $right = count($height) - 1;

        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                if ($height[$left] >= $leftMax) {
                    $leftMax = $height[$left];
                } else {
                    $result += $leftMax - $height[$left];
                }
                $left++;
            } else {
                if ($height[$right] >= $rightMax) {
                    $rightMax = $height[$right];
                } else {
                    $result += $rightMax - $height[$right];
                }
                $right--;
            }
        }

        // dd($result);
        return $result;
    }
}
