<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/binary-search/?envType=study-plan&id=algorithm-i.
 * 88.10/68.15.
 */
final class Task704
{
    /**
     * @param int[] $nums
     */
    public function search(array $nums, int $target): int
    {
        return $this->process($nums, $target);
    }

    private function process(array $nums, int $target, int $offset = 0): int
    {
        if (empty($nums)) {
            return -1;
        }

        $index = (int)floor(count($nums) / 2);

        if ($nums[$index] === $target) {
            return $index + $offset;
        }

        return $nums[$index] > $target
            ? $this->process(array_slice($nums, 0, $index), $target, $offset)
            : $this->process(array_slice($nums, $index + 1), $target, $offset + $index + 1);
    }
}
