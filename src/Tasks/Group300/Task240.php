<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * 8.33/66.67.
 * https://leetcode.com/problems/search-a-2d-matrix-ii/description/?envType=problem-list-v2.
 */
final class Task240
{
    /**
     * @param array<int[]> $matrix
     */
    public function searchMatrix(array $matrix, int $target): bool
    {
        $row = 0;
        $rows = count($matrix);
        $col = count($matrix[0]) - 1;

        while ($col >= 0 && $row < $rows) {
            if ($matrix[$row][$col] === $target) {
                return true;
            }

            if ($matrix[$row][$col] > $target) {
                --$col;
            } else {
                ++$row;
            }
        }

        return false;
    }
}
