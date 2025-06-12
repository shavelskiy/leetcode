<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

/**
 * https://leetcode.com/problems/koko-eating-bananas.
 */
final class Task875
{
    /**
     * @param int[] $piles
     */
    public function minEatingSpeed(array $piles, int $h): int
    {
        $left = 1;
        $right = max($piles);

        while ($left <= $right) {
            $middle = intdiv($left + $right, 2);

            $current = 0;
            foreach ($piles as $pile) {
                $current += ceil($pile / $middle);
            }

            if ((int)$current > $h) {
                $left = $middle + 1;
            } else {
                $right = $middle - 1;
            }
        }

        return $left;
    }
}
