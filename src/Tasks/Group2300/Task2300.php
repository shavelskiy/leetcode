<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

/**
 * 40/100
 * https://leetcode.com/problems/successful-pairs-of-spells-and-potions.
 */
final class Task2300
{
    /**
     * @param int[] $spells
     * @param int[] $potions
     *
     * @return int[]
     */
    public function successfulPairs(array $spells, array $potions, int $success): array
    {
        sort($potions);
        $m = count($potions);

        $result = [];
        foreach ($spells as $spell) {
            $start = 0;
            $end = $m - 1;

            while ($start <= $end) {
                $current = (int)floor(($start + $end) / 2);

                if ($potions[$current] * $spell >= $success) {
                    $end = $current - 1;
                } else {
                    $start = $current + 1;
                }
            }

            $result[] = $m - $start;
        }

        return $result;
    }
}
