<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/max-area-of-island/
 * 63.27/51.2.
 */
final class Task695
{
    /**
     * @param array<int[]> $grid
     */
    public function maxAreaOfIsland(array $grid): int
    {
        $m = count($grid);
        $n = count($grid[0]);

        $max = 0;
        for ($y = 0; $y < $m; ++$y) {
            for ($x = 0; $x < $n; ++$x) {
                if ($grid[$y][$x] !== 1) {
                    continue;
                }

                $sum = 0;
                $this->getIslandArea($sum, $grid, $y, $x);

                $max = max($max, $sum);
            }
        }

        return $max;
    }

    private function getIslandArea(int &$sum, array &$grid, int $y, int $x): void
    {
        if (!isset($grid[$y][$x]) || $grid[$y][$x] !== 1) {
            return;
        }

        ++$sum;
        $grid[$y][$x] = 0;

        $this->getIslandArea($sum, $grid, $y - 1, $x);
        $this->getIslandArea($sum, $grid, $y, $x + 1);
        $this->getIslandArea($sum, $grid, $y + 1, $x);
        $this->getIslandArea($sum, $grid, $y, $x - 1);
    }
}
