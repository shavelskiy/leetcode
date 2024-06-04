<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/count-sub-islands/
 * 50/100.
 */
final class Task1905
{
    /**
     * @param array<int[]> $grid1
     * @param array<int[]> $grid2
     */
    public function countSubIslands(array $grid1, array $grid2): int
    {
        $n = count($grid2);
        $m = count($grid2[0]);

        $result = 0;
        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                if ($grid2[$i][$j] === 0) {
                    continue;
                }

                $has = true;
                $this->process($grid2, $grid1, $has, $i, $j);
                if ($has) {
                    ++$result;
                }
            }
        }

        return $result;
    }

    private function process(array &$grid, array $grid1, bool &$has, int $i, int $j): void
    {
        if (($grid[$i][$j] ?? 0) === 0) {
            return;
        }

        $grid[$i][$j] = 0;
        $has = $has && $grid1[$i][$j] === 1;

        $this->process($grid, $grid1, $has, $i - 1, $j);
        $this->process($grid, $grid1, $has, $i, $j + 1);
        $this->process($grid, $grid1, $has, $i + 1, $j);
        $this->process($grid, $grid1, $has, $i, $j - 1);
    }
}
