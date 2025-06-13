<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
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

        for ($i = $min + 1; $i < min($n, 9); ++$i) {
            foreach ($this->combinationSum3($k - 1, $n - $i, $i) as $current) {
                $result[] = [$i, ...$current];
            }
        }

        return $result;
    }
}
