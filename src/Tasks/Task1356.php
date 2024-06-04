<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/sort-integers-by-the-number-of-1-bits/
 * 50/75.
 */
final class Task1356
{
    /**
     * @param int[] $arr
     *
     * @return int[]
     */
    public function sortByBits(array $arr): array
    {
        $map = [];
        $result = [];

        foreach ($arr as $num) {
            $count = substr_count(decbin($num), '1');
            if (!isset($map[$count])) {
                $map[$count] = [];
            }

            $map[$count][] = $num;
        }

        ksort($map);
        foreach ($map as $nums) {
            sort($nums);
            $result = [...$result, ...$nums];
        }

        return $result;
    }
}
