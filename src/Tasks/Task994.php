<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/rotting-oranges/description/
 * 77.78/66.67.
 */
final class Task994
{
    private const MOVES = [
        [-1, 0],
        [0, 1],
        [1, 0],
        [0, -1],
    ];

    /**
     * @param array<int[]> $grid
     */
    public function orangesRotting(array $grid): int
    {
        $n = count($grid);
        $m = count($grid[0]);

        $fresh = 0;
        $queue = [];
        for ($i = 0; $i < $n; ++$i) {
            for ($j = 0; $j < $m; ++$j) {
                if ($grid[$i][$j] === 2) {
                    $queue[] = [$i, $j];
                }

                if ($grid[$i][$j] === 1) {
                    ++$fresh;
                }
            }
        }

        $days = 0;
        while (!empty($queue)) {
            $n = count($queue);
            for ($k = 0; $k < $n; ++$k) {
                [$i, $j] = array_shift($queue);

                foreach (self::MOVES as $move) {
                    $i2 = $i + $move[0];
                    $j2 = $j + $move[1];
                    if (($grid[$i2][$j2] ?? null) === 1) {
                        $queue[] = [$i2, $j2];
                        $grid[$i2][$j2] = 2;
                        --$fresh;
                    }
                }
            }

            if (!empty($queue)) {
                ++$days;
            }
        }

        return $fresh === 0 ? $days : -1;
    }
}
