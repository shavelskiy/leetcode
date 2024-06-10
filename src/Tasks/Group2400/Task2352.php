<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

/**
 * https://leetcode.com/problems/equal-row-and-column-pairs/.
 * 61.11/11.11.
 */
final class Task2352
{
    /**
     * @param array<int[]> $grid
     */
    public function equalPairs(array $grid): int
    {
        $n = count($grid);

        $hash = [];

        for ($i = 0; $i < $n; ++$i) {
            $row = '';
            $column = '';
            for ($j = 0; $j < $n; ++$j) {
                $row .= '.' . $grid[$i][$j];
                $column .= '.' . $grid[$j][$i];
            }

            if (!isset($hash[$row][0])) {
                $hash[$row][0] = 0;
            }

            if (!isset($hash[$column][1])) {
                $hash[$column][1] = 0;
            }

            ++$hash[$row][0];
            ++$hash[$column][1];
        }

        $result = 0;

        foreach ($hash as $values) {
            if (count($values) > 1) {
                $result += $values[0] * $values[1];
            }
        }

        return $result;
    }
}
