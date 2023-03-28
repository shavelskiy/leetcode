<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/number-of-enclaves/
 * 100/100
 */
final class Task1020
{
    /**
     * @param array<int[]> $grid
     */
    public function numEnclaves(array $grid): int
    {
        $n = count($grid) - 1;
        $m = count($grid[0]) - 1;

        for ($i = 0; $i <= $n; $i++) {
            $this->process($grid, $i, 0);
            $this->process($grid, $i, $m);
        }

        for ($j = 0; $j <= $m; $j++) {
            $this->process($grid, 0, $j);
            $this->process($grid, $n, $j);
        }

        $result = 0;
        for ($i = 1; $i < $n; $i++) {
            for ($j = 1; $j < $m; $j++) {
                if ($grid[$i][$j] === 1) {
                    $result++;
                }
            }
        }

        return $result++;
    }

    public function process(array &$grid, int $i, int $j): void
    {
        if (!isset($grid[$i][$j]) || $grid[$i][$j] === 0) {
            return;
        }

        $grid[$i][$j] = 0;

        $this->process($grid, $i - 1, $j);
        $this->process($grid, $i, $j + 1);
        $this->process($grid, $i + 1, $j);
        $this->process($grid, $i, $j - 1);
    }
}
