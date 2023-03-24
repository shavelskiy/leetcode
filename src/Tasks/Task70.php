<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/climbing-stairs/
 * 18.91/94.3
 */
final class Task70
{
    public function climbStairs(int $n): int
    {
        $result = [1, 1];
        for ($i = 2; $i <= $n; $i++) {
            $result = [$result[1], $result[0] + $result[1]];
        }

        return $result[1];
    }
}
