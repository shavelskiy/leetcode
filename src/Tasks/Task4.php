<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/median-of-two-sorted-arrays/
 * 13.35/92.23
 */
final class Task4
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        while ((count($nums1) + count($nums2)) > 2) {
            if (empty($nums1)) {
                unset($nums2[count($nums2) - 1], $nums2[0]);

                $nums2 = array_values($nums2);
                continue;
            }

            if (empty($nums2)) {
                unset($nums1[count($nums1) - 1], $nums1[0]);

                $nums1 = array_values($nums1);
                continue;
            }

            if ($nums1[0] > $nums2[0]) {
                unset($nums2[0]);
                $nums2 = array_values($nums2);
            } else {
                unset($nums1[0]);
                $nums1 = array_values($nums1);
            }

            if (empty($nums1) || $nums1[count($nums1) - 1] < $nums2[count($nums2) - 1]) {
                unset($nums2[count($nums2) - 1]);
                $nums2 = array_values($nums2);
            } else {
                unset($nums1[count($nums1) - 1]);
                $nums1 = array_values($nums1);
            }
        }

        $result = array_merge($nums1, $nums2);
        $sum = 0;
        foreach ($result as $item) {
            $sum += $item;
        }

        return $sum / count($result);
    }
}
