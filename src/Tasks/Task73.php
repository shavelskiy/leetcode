<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/set-matrix-zeroes/description/
 * 63.25/42.31.
 */
final class Task73
{
    /**
     * @param array<int[]> $matrix
     */
    public function setZeroes(array &$matrix): void
    {
        $n = count($matrix);
        $m = count($matrix[0]);

        $lines = [];
        $columns = [];

        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                if ($matrix[$i][$j] === 0) {
                    $lines[$i] = true;
                    $columns[$j] = true;
                }
            }
        }

        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                if (isset($lines[$i]) || isset($columns[$j])) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
    }
}
