<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/count-negative-numbers-in-a-sorted-matrix/
 * 68.75/12.50.
 */
final class Task1351
{
    /**
     * @param array<int[]> $grid
     */
    public function countNegatives(array $grid): int
    {
        $n = count($grid[0]) - 1;
        $result = 0;

        $end = $n;
        foreach ($grid as $row) {
            $start = 0;

            while ($start <= $end) {
                $middle = intdiv($start + $end, 2);

                if ($row[$middle] >= 0) {
                    if ($middle === $n) {
                        break;
                    }

                    if ($row[$middle + 1] < 0) {
                        $result += $n - $middle;
                        break;
                    }

                    $start = $middle + 1;
                } else {
                    if ($middle == 0) {
                        $result += $n + 1;
                        break;
                    }

                    $end = $middle - 1;
                }
            }
        }

        return $result;
    }
}
