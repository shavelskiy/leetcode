<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/valid-sudoku/
 * 98.31/42.37.
 */
final class Task36
{
    /**
     * @param array<string[]> $board
     */
    public function isValidSudoku(array $board): bool
    {
        $checked = [];
        for ($i = 0; $i < 9; ++$i) {
            for ($j = 0; $j < 9; ++$j) {
                if (($value = $board[$i][$j]) === '.') {
                    continue;
                }

                if (!$this->isValidCell($checked, $board, $value, $i, $j)) {
                    return false;
                }
            }
        }

        return true;
    }

    private function isValidCell(array &$checked, array $board, string $value, int $y, int $x): bool
    {
        for ($i = 0; $i < 9; ++$i) {
            if ($i !== $x && $board[$y][$i] === $value) {
                return false;
            }

            if ($i !== $y && $board[$i][$x] === $value) {
                return false;
            }
        }

        $centerStartX = intdiv($x, 3) * 3;
        $centerStartY = intdiv($y, 3) * 3;

        if (isset($checked[$centerStartX][$centerStartY])) {
            return true;
        }

        $checked[$centerStartX][$centerStartY] = true;

        $values = [];
        for ($i = 0; $i < 3; ++$i) {
            for ($j = 0; $j < 3; ++$j) {
                if (($cellValue = $board[$centerStartY + $i][$centerStartX + $j]) === '.') {
                    continue;
                }

                if (in_array($cellValue, $values, true)) {
                    return false;
                }

                $values[] = $cellValue;
            }
        }

        return true;
    }
}
