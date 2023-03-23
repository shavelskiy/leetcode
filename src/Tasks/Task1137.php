<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/n-th-tribonacci-number/
 * 95.10/80.39
 */
final class Task1137
{
    public function tribonacci(int $n): int
    {
        $result = [0, 1, 1];
        for ($i = 3; $i <= $n; $i++) {
            $result = [$result[1], $result[2], $result[0] + $result[1] + $result[2]];
        }

        return $n < 2 ? $result[$n] : $result[2];
    }
}
