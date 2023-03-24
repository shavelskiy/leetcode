<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/pascals-triangle/
 * 75/66.30
 */
final class Task118
{
    /**
     * @return array<int[]>
     */
    public function generate(int $numRows): array
    {
        $result = array_fill(0, $numRows, [1]);

        if ($numRows === 1) {
            return $result;
        }

        for ($i = 1; $i < $numRows; $i++) {
            $prev = $result[$i - 1];
            for ($j = 1; $j <= $i; $j++) {
                $result[$i][$j] = $i === $j ? 1 : $prev[$j - 1] + $prev[$j];
            }
        }

        return $result;
    }
}
