<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/intersection-of-two-arrays-ii/
 * 78.38/66.22.
 */
final class Task350
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     *
     * @return int[]
     */
    public function intersect(array $nums1, array $nums2): array
    {
        $firstMore = count($nums1) > count($nums2);
        $map = [];
        foreach ($firstMore ? $nums1 : $nums2 as $num) {
            $map[$num] = isset($map[$num]) ? $map[$num] + 1 : 1;
        }

        $result = [];
        foreach ($firstMore ? $nums2 : $nums1 as $num) {
            if (($map[$num] ?? 0) < 1) {
                continue;
            }

            $result[] = $num;
            --$map[$num];
        }

        return $result;
    }
}
