<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use SplMinHeap;

/**
 * 100/100
 * https://leetcode.com/problems/total-cost-to-hire-k-workers.
 */
final class Task2462
{
    /**
     * @param int[] $costs
     */
    public function totalCost(array $costs, int $k, int $candidates): int
    {
        $leftHeap = new SplMinHeap();
        $rightHeap = new SplMinHeap();

        $left = 0;
        $right = count($costs) - 1;

        while ($leftHeap->count() < $candidates && $left <= $right) {
            $leftHeap->insert($costs[$left]);
            ++$left;
        }

        while ($rightHeap->count() < $candidates && $left <= $right) {
            $rightHeap->insert($costs[$right]);
            --$right;
        }

        $result = 0;
        $leftMin = $leftHeap->extract();
        $rightMin = $rightHeap->count() > 0 ? $rightHeap->extract() : null;

        for ($i = 0; $i < $k; ++$i) {
            if ($leftMin === null) {
                $result += $rightMin;
                $rightMin = $rightHeap->count() > 0 ? $rightHeap->extract() : null;
                continue;
            }

            if ($rightMin === null) {
                $result += $leftMin;
                $leftMin = $leftHeap->count() > 0 ? $leftHeap->extract() : null;
                continue;
            }

            if ($left > $right) {
                if ($leftMin <= $rightMin) {
                    $result += $leftMin;
                    $leftMin = $leftHeap->count() > 0 ? $leftHeap->extract() : null;
                } else {
                    $result += $rightMin;
                    $rightMin = $rightHeap->count() > 0 ? $rightHeap->extract() : null;
                }

                continue;
            }

            if ($leftMin <= $rightMin) {
                $result += $leftMin;

                $leftHeap->insert($costs[$left]);
                $leftMin = $leftHeap->extract();
                ++$left;
            } else {
                $result += $rightMin;

                $rightHeap->insert($costs[$right]);
                $rightMin = $rightHeap->extract();
                --$right;
            }
        }

        return $result;
    }
}
