<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/search-in-rotated-sorted-array/
 * 80/100
 */
final class Task33
{
    /**
     * @param int[] $nums
     */
    public function search(array $nums, int $target): int
    {
        $n = count($nums);
        $offset = 0;

        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] < $nums[$i - 1]) {
                $offset = $i;
                break;
            }
        }

        $start = 0;
        $end = $n - 1;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);
            $index = ($current + $offset) % $n;

            if ($nums[$index] > $target) {
                $end = $current - 1;
            } elseif ($nums[$index] < $target) {
                $start = $current + 1;
            } else {
                return $index;
            }
        }

        return -1;
    }
}
