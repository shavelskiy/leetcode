<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

/**
 * https://leetcode.com/problems/binary-search/
 * 52.98/45.54.
 */
final class Task704
{
    /**
     * @param int[] $nums
     */
    public function search(array $nums, int $target, int $offset = 0): int
    {
        if (empty($nums)) {
            return -1;
        }

        $index = (int)floor(count($nums) / 2);

        if ($nums[$index] === $target) {
            return $index + $offset;
        }

        return $nums[$index] > $target
            ? $this->search(array_slice($nums, 0, $index), $target, $offset)
            : $this->search(array_slice($nums, $index + 1), $target, $offset + $index + 1);
    }
}
