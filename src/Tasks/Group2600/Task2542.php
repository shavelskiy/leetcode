<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use SplMinHeap;

/**
 * 100/100
 * https://leetcode.com/problems/maximum-subsequence-score.
 */
final class Task2542
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     */
    public function maxScore(array $nums1, array $nums2, int $k): int
    {
        $indices = range(0, count($nums1) - 1);

        usort($indices, fn (int $a, int $b) => $nums2[$b] <=> $nums2[$a]);

        $result = 0;
        $sum = 0;
        $heap = new SplMinHeap();

        foreach ($indices as $index) {
            $n1 = $nums1[$index];

            $heap->insert($n1);
            $sum += $n1;

            if ($heap->count() > $k) {
                $sum -= $heap->extract();
            }

            if ($heap->count() === $k) {
                $result = max($result, $sum * $nums2[$index]);
            }
        }

        return $result;
    }
}
