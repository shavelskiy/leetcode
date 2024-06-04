<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/reshape-the-matrix/
 * 62.50/87.5.
 */
final class Task566
{
    /**
     * @param array<int[]> $mat
     *
     * @return array<int[]>
     */
    public function matrixReshape(array $mat, int $r, int $c): array
    {
        $n = count($mat);
        $m = count($mat[0]);
        if ($n * $m !== $r * $c) {
            return $mat;
        }

        $result = array_fill(0, $r, []);
        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                $result[intdiv(($i * $m) + $j, $c)][] = $mat[$i][$j];
            }
        }

        return $result;
    }
}
