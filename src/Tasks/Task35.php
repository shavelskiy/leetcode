<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/search-insert-position
 * 46.46/46.46.
 */
final class Task35
{
    /**
     * @param int[] $nums
     */
    public function searchInsert(array $nums, int $target, int $offset = 0): int
    {
        if (empty($nums)) {
            return $offset;
        }

        $index = (int)floor(count($nums) / 2);

        if ($nums[$index] === $target) {
            return $index + $offset;
        }

        return $nums[$index] > $target
            ? $this->searchInsert(array_slice($nums, 0, $index), $target, $offset)
            : $this->searchInsert(array_slice($nums, $index + 1), $target, $offset + $index + 1);
    }
}
