<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/search-a-2d-matrix/
 * 43.18/36.36
 */
final class Task74
{
    /**
     * @param array<int[]> $matrix
     */
    public function searchMatrix(array $matrix, int $target): bool
    {
        $start = 0;
        $end = count($matrix) - 1;

        while (true) {
            if ($start === $end) {
                return $this->has($matrix[$start], $target);
            }
            $current = (int)ceil(($start + $end) / 2);
            if ($matrix[$current][0] === $target) {
                return true;
            }

            if ($matrix[$current][0] > $target) {
                $end = $current - 1;
            } else {
                $start = $current;
            }
        }

        return false;
    }

    private function has(array $row, int $target): bool
    {
        $start = 0;
        $end = count($row) - 1;

        while ($start !== $end) {
            $current = (int)ceil(($start + $end) / 2);
            if ($row[$current] === $target) {
                return true;
            }

            if ($row[$current] > $target) {
                $end = $current - 1;
            } else {
                $start = $current;
            }
        }

        return $row[$start] === $target;
    }
}
