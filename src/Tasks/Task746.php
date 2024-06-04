<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/min-cost-climbing-stairs/
 * 52.83/92.45.
 */
final class Task746
{
    /**
     * @param int[] $cost
     */
    public function minCostClimbingStairs(array $cost): int
    {
        $n = count($cost);

        if ($n === 2) {
            return min($cost);
        }

        $result = [0, 0];

        for ($i = 2; $i <= $n; ++$i) {
            $result = [
                $result[1],
                min($result[0] + $cost[$i - 2], $result[1] + $cost[$i - 1]),
            ];
        }

        return $result[1];
    }
}
