<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/merge-sorted-array/
 * 57.78/80.
 */
final class Task88
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        $result = [];

        $i = 0;
        $j = 0;
        while ($i < $m || $j < $n) {
            if ($j >= $n || ($i < $m && $nums1[$i] < $nums2[$j])) {
                $result[] = $nums1[$i];
                ++$i;
            } else {
                $result[] = $nums2[$j];
                ++$j;
            }
        }

        $nums1 = $result;
    }
}
