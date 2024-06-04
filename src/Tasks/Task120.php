<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/triangle/
 * 61.45/100.
 */
final class Task120
{
    /**
     * @param array<int[]> $triangle
     */
    public function minimumTotal(array $triangle): int
    {
        for ($level = count($triangle) - 2; $level >= 0; --$level) {
            for ($i = 0; $i <= $level; ++$i) {
                $triangle[$level][$i] += min(
                    $triangle[$level + 1][$i],
                    $triangle[$level + 1][$i + 1],
                );
            }
        }

        return $triangle[0][0];
    }
}
