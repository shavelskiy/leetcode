<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use SplMaxHeap;

/**
 * https://leetcode.com/problems/kth-largest-element-in-an-array/description/?envType=study-plan-v2.
 */
final class Task215
{
    /**
     * @param array[] $nums
     */
    public function findKthLargest(array $nums, int $k): int
    {
        $heap = new SplMaxHeap();

        foreach ($nums as $num) {
            $heap->insert($num);
        }

        for ($i = 1; $i < $k; ++$i) {
            $heap->next();
        }

        return $heap->current();
    }
}
