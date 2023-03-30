<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/maximum-distance-between-a-pair-of-values/
 * 100/100
 */
final class Task1855
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function maxDistance(array $nums1, array $nums2): int
    {
        $n1 = count($nums1);
        $n2 = count($nums2);

        $max = 0;

        $i = 0;
        $j = 0;

        while ($i < $n1 && $j < $n2) {
            if ($nums2[$j] >= $nums1[$i]) {
                $max = max($max, $j - $i);
                $j++;
            } else {
                $i++;
                if ($j < $i) {
                    $j = $i;
                }
            }
        }

        return $max;
    }
}
