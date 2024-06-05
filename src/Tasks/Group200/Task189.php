<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/rotate-array
 * 65.45/60.91.
 */
final class Task189
{
    /**
     * @param int[] $nums
     */
    public function rotate(array &$nums, int $k): void
    {
        $n = count($nums);
        $result = array_fill(0, $n, 0);
        for ($i = 0; $i < $n; ++$i) {
            $result[($i + $k) % $n] = $nums[$i];
        }

        $nums = $result;
    }
}
