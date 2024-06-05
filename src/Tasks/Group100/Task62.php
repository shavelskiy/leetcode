<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/unique-paths/
 * 91.7/28.57.
 */
final class Task62
{
    public function uniquePaths(int $m, int $n): int
    {
        $result = array_fill(0, $m, array_fill(0, $n, 0));
        $result[0][0] = 1;

        --$m;
        --$n;

        for ($i = 0; $i <= $m; ++$i) {
            for ($j = 0; $j <= $n; ++$j) {
                if ($i < $m) {
                    $result[$i + 1][$j] += $result[$i][$j];
                }

                if ($j < $n) {
                    $result[$i][$j + 1] += $result[$i][$j];
                }
            }
        }

        return $result[$m][$n];
    }
}
