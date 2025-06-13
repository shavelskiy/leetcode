<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * 100/100
 * https://leetcode.com/problems/combination-sum-iii.
 */
final class Task216
{
    /**
     * @return array<int[]>
     */
    public function combinationSum3(int $k, int $n, int $min = 0): array
    {
        if ($k === 1) {
            return $min < $n && $n < 10 ? [[$n]] : [];
        }

        $result = [];

        while ($min < $n && $min < 9) {
            ++$min;
            foreach ($this->combinationSum3($k - 1, $n - $min, $min) as $current) {
                $result[] = [$min, ...$current];
            }
        }

        return $result;
    }
}
