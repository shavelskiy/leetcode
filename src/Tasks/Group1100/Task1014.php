<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

/**
 * https://leetcode.com/problems/best-sightseeing-pair/
 * 100/100.
 */
final class Task1014
{
    /**
     * @param int[] $values
     */
    public function maxScoreSightseeingPair(array $values): int
    {
        $n = count($values);

        $max = 0;
        $result = 0;

        for ($i = 1; $i < $n; ++$i) {
            $max = max($max, $values[$i - 1] + ($i - 1));
            $result = max($result, $values[$i] + $max - $i);
        }

        return $result;
    }
}
