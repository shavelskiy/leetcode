<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\Heap1046 as Heap;

/**
 * https://leetcode.com/problems/last-stone-weight/
 * 96.30/18.52
 */
final class Task1046
{
    /**
     * @param int[] $stones
     */
    public function lastStoneWeight(array $stones): int
    {
        $heap = new Heap();
        foreach ($stones as $stone) {
            $heap->insert($stone);
        }

        while ($heap->count() > 1) {
            $heap->insert($heap->extract() - $heap->extract());
        }

        return $heap->extract();
    }
}
