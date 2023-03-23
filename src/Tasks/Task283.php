<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/move-zeroes/.
 * 65.10/54.26.
 */
final class Task283
{
    /**
     * @param int[] $nums
     */
    public function moveZeroes(array &$nums): void
    {
        $count = 0;
        foreach ($nums as $key => $num) {
            if ($num === 0) {
                $count++;
                unset($nums[$key]);
            }
        }

        $nums = array_values($nums);
        for ($i = 0; $i < $count; $i++) {
            $nums[] = 0;
        }
    }
}
