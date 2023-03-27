<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/next-greater-element-i/
 * 13.79/20.69
 */
final class Task496
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     *
     * @return int[]
     */
    public function nextGreaterElement(array $nums1, array $nums2): array
    {
        $result = [];

        $n = count($nums1);
        $m = count($nums2);

        for ($i = 0; $i < $n; $i++) {
            $current = $nums1[$i];

            $find = false;
            $max = -1;
            for ($j = 0; $j < $m; $j++) {
                if ($nums2[$j] === $current) {
                    $find = true;
                    continue;
                }

                if (!$find || $nums2[$j] <= $current) {
                    continue;
                }

                $max = $nums2[$j];
                break;
            }

            $result[] = $max;
        }

        return $result;
    }
}
