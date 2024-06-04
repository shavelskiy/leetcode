<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/single-number/
 * 24.24/19.5.
 */
final class Task136
{
    /**
     * @param int[] $nums
     */
    public function singleNumber(array $nums): int
    {
        $map = [];
        foreach ($nums as $num) {
            $map[$num] = ($map[$num] ?? 0) + 1;
        }

        foreach ($map as $num => $count) {
            if ($count === 1) {
                return $num;
            }
        }

        return 0;
    }
}
