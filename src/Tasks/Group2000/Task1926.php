<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

/**
 * https://leetcode.com/problems/nearest-exit-from-entrance-in-maze/.
 * 21.43/50.00.
 */
final class Task1926
{
    private const DIRECTIONS = [
        [0, 1],
        [-1, 0],
        [0, -1],
        [1, 0],
    ];

    /**
     * @param array<string[]> $maze
     * @param int[]           $entrance
     */
    public function nearestExit($maze, $entrance)
    {
        $m = count($maze);
        $n = count($maze[0]);

        $queue = [[$entrance[0], $entrance[1], 0]];
        $visited = [];

        while (!empty($queue)) {
            [$x, $y, $steps] = array_shift($queue);

            if (($x !== $entrance[0] || $y !== $entrance[1]) && ($x === 0 || $x === $m - 1 || $y === 0 || $y === $n - 1)) {
                return $steps;
            }

            $key = $x . ',' . $y;
            if (isset($visited[$key])) {
                continue;
            }
            $visited[$key] = true;

            foreach (self::DIRECTIONS as $direction) {
                $nx = $x + $direction[0];
                $ny = $y + $direction[1];

                if ($nx >= 0 && $nx < $m && $ny >= 0 && $ny < $n && $maze[$nx][$ny] === '.' && !isset($visited[$nx . ',' . $ny])) {
                    array_push($queue, [$nx, $ny, $steps + 1]);
                }
            }
        }

        return -1;
    }
}
