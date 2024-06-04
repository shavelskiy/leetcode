<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/fibonacci-number/
 * 56.85/96.58.
 */
final class Task509
{
    public function fib(int $n): int
    {
        $result = [0, 1];
        for ($i = 2; $i <= $n; ++$i) {
            $result = [$result[1], $result[0] + $result[1]];
        }

        return $n < 1 ? $result[$n] : $result[1];
    }
}
