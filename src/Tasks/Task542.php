<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/01-matrix/
 * 71.43/100.
 */
final class Task542
{
    /**
     * @param array<int[]> $mat
     *
     * @return array<int[]>
     */
    public function updateMatrix(array $mat): array
    {
        $m = count($mat);
        $n = count($mat[0]);

        $result = array_fill(0, $m, array_fill(0, $n, null));

        for ($i = 0; $i < $m; ++$i) {
            for ($j = 0; $j < $n; ++$j) {
                if ($mat[$i][$j] === 0) {
                    $result[$i][$j] = 0;
                    continue;
                }

                if (($prev = $result[$i - 1][$j] ?? null) !== null) {
                    $result[$i][$j] = $result[$i][$j] === null
                        ? $prev + 1
                        : min($result[$i][$j], $prev + 1);
                }

                if (($prev = $result[$i][$j - 1] ?? null) !== null) {
                    $result[$i][$j] = $result[$i][$j] === null
                        ? $prev + 1
                        : min($result[$i][$j], $prev + 1);
                }
            }
        }

        for ($i = $m - 1; $i >= 0; --$i) {
            for ($j = $n - 1; $j >= 0; --$j) {
                if (($prev = $result[$i + 1][$j] ?? null) !== null) {
                    $result[$i][$j] = $result[$i][$j] === null
                        ? $prev + 1
                        : min($result[$i][$j], $prev + 1);
                }

                if (($prev = $result[$i][$j + 1] ?? null) !== null) {
                    $result[$i][$j] = $result[$i][$j] === null
                        ? $prev + 1
                        : min($result[$i][$j], $prev + 1);
                }
            }
        }

        return $result;
    }
}
