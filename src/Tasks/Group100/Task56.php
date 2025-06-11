<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * 98.95/92.63
 * https://leetcode.com/problems/merge-intervals.
 */
final class Task56
{
    /**
     * @param array<int[]> $intervals
     *
     * @return array<int[]>
     */
    public function merge(array $intervals): array
    {
        $sorted = [];
        foreach ($intervals as $interval) {
            $start = $interval[0];
            if (!isset($sorted[$start])) {
                $sorted[$start] = $interval;
            } else {
                $sorted[$start] = [
                    $start,
                    max($interval[1], $sorted[$start][1]),
                ];
            }
        }

        ksort($sorted);

        $result = [];
        $current = array_shift($sorted);

        foreach ($sorted as $interval) {
            if ($interval[0] > $current[1]) {
                $result[] = $current;
                $current = $interval;
                continue;
            }

            $current[1] = max($current[1], $interval[1]);
        }

        $result[] = $current;

        return $result;
    }
}
