<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/range-sum-query-immutable/
 * 77.78/61.11
 */
final class Task303
{
    private array $sums = [];

    /**
     * @param int[] $nums
     */
    public function __construct(array $nums)
    {
        $sum = 0;
        foreach ($nums as $i => $num) {
            $sum += $num;
            $this->sums[$i] = $sum;
        }
    }

    public function sumRange(int $left, int $right): int
    {
        if ($left === 0) {
            return $this->sums[$right];
        }
        
        return $this->sums[$right] - $this->sums[$left - 1];
    }
}
