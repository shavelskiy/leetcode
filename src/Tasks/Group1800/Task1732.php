<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

/**
 * https://leetcode.com/problems/find-the-highest-altitude/.
 * 26.23/86.89.
 */
final class Task1732
{
    /**
     * @param int[] $gain
     */
    public function largestAltitude(array $gain): int
    {
        $max = 0;
        $current = 0;

        foreach ($gain as $item) {
            $current += $item;
            $max = max($max, $current);
        }

        return $max;
    }
}
