<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/number-of-closed-islands/
 * 100/100
 */
final class Task1254
{
    /**
     * @param array<int[]> $grid
     */
    public function closedIsland(array $grid): int
    {
        $n = count($grid);
        $m = count($grid[0]);

        $result = 0;
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                if ($grid[$i][$j] === 1) {
                    continue;
                }

                $valid = true;
                $this->validate($grid, $valid, $i, $j);
                if ($valid) {
                    $result++;
                }
            }
        }

        return $result++;
    }

    public function validate(array &$grid, bool &$valid, int $i, int $j): void
    {
        if (!isset($grid[$i][$j])) {
            $valid = false;
            return;
        }

        if ($grid[$i][$j] === 1) {
            return;
        }

        $grid[$i][$j] = 1;

        $this->validate($grid, $valid, $i - 1, $j);
        $this->validate($grid, $valid, $i, $j + 1);
        $this->validate($grid, $valid, $i + 1, $j);
        $this->validate($grid, $valid, $i, $j - 1);
    }
}
