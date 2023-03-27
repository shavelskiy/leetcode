<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-first-and-last-position-of-element-in-sorted-array/
 * 89.47/48.68
 */
final class Task34
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function searchRange(array $nums, int $target): array
    {
        $n = count($nums);
        if ($n < 1) {
            return [-1, -1];
        }

        return [
            $this->search($nums, $n, $target, true),
            $this->search($nums, $n, $target, false),
        ];
    }

    private function search(array $nums, int $n, int $target, bool $left): int
    {
        $start = 0;
        $end = $n - 1;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);

            if ($nums[$current] < $target) {
                $start = $current + 1;
            } elseif ($nums[$current] > $target) {
                $end = $current - 1;
            } else {
                if ($left) {
                    if ($current < 1 || $nums[$current - 1] < $target) {
                        return $current;
                    }
                    $end = $current - 1;
                } else {
                    if ($current >= $n - 1 || $nums[$current + 1] > $target) {
                        return $current;
                    }
                    $start = $current + 1;
                }
            }
        }

        return -1;
    }
}
