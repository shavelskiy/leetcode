<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/matrix-diagonal-sum/
 * 96.43/82.14.
 */
final class Task1572
{
    /**
     * @param array<int[]> $mat
     */
    public function diagonalSum(array $mat): int
    {
        $n = count($mat);

        $result = 0;

        for ($i = 0; $i < $n; ++$i) {
            $result += $mat[$i][$i];
            if ($n % 2 === 0 || (2 * $i !== $n - 1)) {
                $result += $mat[$i][$n - 1 - $i];
            }
        }

        return $result;
    }
}
