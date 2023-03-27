<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/peak-index-in-a-mountain-array/
 * 50/87.50
 */
final class Task852
{
    /**
     * @param int[] $arr
     */
    public function peakIndexInMountainArray(array $arr): int
    {
        $start = 0;
        $end = count($arr) - 1;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);

            if ($arr[$current] < $arr[$current + 1]) {
                $start = $current + 1;
            } elseif ($arr[$current] < $arr[$current - 1]) {
                $end = $current - 1;
            } else {
                return $current;
            }
        }

        return 0;
    }
}
