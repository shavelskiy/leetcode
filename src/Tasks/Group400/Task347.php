<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/top-k-frequent-elements/
 * 41.82/98.18.
 */
final class Task347
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function topKFrequent(array $nums, int $k): array
    {
        $map = [];
        foreach ($nums as $num) {
            $map[$num] = isset($map[$num]) ? $map[$num] + 1 : 1;
        }

        uasort($map, fn (int $a, int $b) => $a < $b ? 1 : -1);
        $result = [];

        foreach (array_keys($map) as $num) {
            if (count($result) === $k) {
                break;
            }

            $result[] = $num;
        }

        return $result;
    }
}
