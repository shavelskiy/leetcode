<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/delete-and-earn/
 * 50/100
 */
final class Task740
{
    /**
     * @param int[] $nums
     */
    public function deleteAndEarn(array $nums): int
    {
        $map = [];
        foreach ($nums as $num) {
            $map[$num] = ($map[$num] ?? 0) + 1;
        }
        $nums = array_keys($map);
        sort($nums);

        $lastNum = 0;
        $result = [0, 0];
        foreach ($nums as $num) {
            $result = [
                $result[1],
                $num - 1 > $lastNum ? $result[1] + $num * $map[$num] : max($result[1], $result[0] + $num * $map[$num]),
            ];

            $lastNum = $num;
        }

        return max($result);
    }
}
