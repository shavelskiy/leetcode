<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

/**
 * https://leetcode.com/problems/check-if-it-is-a-straight-line/
 * 90.91/81.82.
 */
final class Task1232
{
    /**
     * @param array<int[]> $coordinates
     */
    public function checkStraightLine(array $coordinates): bool
    {
        $n = count($coordinates);
        $diff = [$coordinates[1][0] - $coordinates[0][0], $coordinates[1][1] - $coordinates[0][1]];
        for ($i = 2; $i < $n; ++$i) {
            if (
                $diff[0] * ($coordinates[$i][1] - $coordinates[0][1]) !==
                $diff[1] * ($coordinates[$i][0] - $coordinates[0][0])
            ) {
                return false;
            }
        }

        return true;
    }
}
