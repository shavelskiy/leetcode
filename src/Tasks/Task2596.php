<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/check-knight-tour-configuration/
 * 75/37.5
 */
final class Task2596
{
    private const MOVE = [
        [-2, 1],
        [-1, 2],
        [1, 2],
        [2, 1],
        [2, -1],
        [1, -2],
        [-1, -2],
        [-2, -1],
    ];

    /**
     * @param array<int[]> $grid
     */
    public function checkValidGrid(array $grid): bool
    {
        return $this->solve($grid, 0, 0, 0);
    }

    private function solve(array $grid, int $i, int $j, int $need): bool
    {
        if (($grid[$i][$j] ?? 0) !== $need) {
            return false;
        }

        if ($need === count($grid) * count($grid) - 1) {
            return true;
        }

        foreach (self::MOVE as $item) {
            if ($this->solve($grid, $i + $item[0], $j + $item[1], $need + 1) === true) {
                return true;
            }
        }

        return false;
    }
}
