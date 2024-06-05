<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/number-of-islands/
 * 97.78/82.22.
 */
final class Task200
{
    /**
     * @param array<string[]> $grid
     */
    public function numIslands(array $grid): int
    {
        $result = 0;

        $rows = count($grid);
        $cols = count($grid[0]);

        for ($i = 0; $i < $rows; ++$i) {
            for ($j = 0; $j < $cols; ++$j) {
                if ($grid[$i][$j] === '1') {
                    ++$result;
                    $this->clearIsland($grid, $i, $j);
                }
            }
        }

        return $result;
    }

    /**
     * @param array<string[]> $grid
     */
    private function clearIsland(array &$grid, int $i, int $j): void
    {
        if ($grid[$i][$j] !== '1') {
            return;
        }

        $grid[$i][$j] = '2';

        if ($i > 0) {
            $this->clearIsland($grid, $i - 1, $j);
        }

        if (isset($grid[$i][$j + 1])) {
            $this->clearIsland($grid, $i, $j + 1);
        }

        if ($j > 0) {
            $this->clearIsland($grid, $i, $j - 1);
        }

        if (isset($grid[$i + 1][$j])) {
            $this->clearIsland($grid, $i + 1, $j);
        }
    }
}
