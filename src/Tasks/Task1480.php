<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/running-sum-of-1d-array/
 * 44.55/78.74
 */
final class Task1480
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function runningSum(array $nums): array
    {
        $result = [];
        $accumutation = 0;

        foreach ($nums as $num) {
            $result[] = $num + $accumutation;
            $accumutation += $num;
        }

        return $result;
    }
}
