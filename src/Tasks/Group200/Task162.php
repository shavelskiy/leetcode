<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * 100/10.81
 * https://leetcode.com/problems/find-peak-element.
 */
final class Task162
{
    /**
     * @param array[] $nums
     */
    public function findPeakElement(array $nums): int
    {
        for ($i = count($nums) - 1; $i > 0; --$i) {
            if (
                ($i === count($nums) - 1 || $nums[$i] > $nums[$i + 1])
                && $nums[$i] > $nums[$i - 1]
            ) {
                return $i;
            }
        }

        return 0;
    }
}
