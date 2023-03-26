<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-nearest-point-that-has-the-same-x-or-y-coordinate/
 * 31.25/56.25
 */
final class Task1779
{
    /**
     * @param array<int[]> $points
     */
    public function nearestValidPoint(int $x, int $y, array $points): int
    {
        $min = null;
        $index = -1;
        foreach ($points as $key => $point) {
            if ($point[0] !== $x && $point[1] !== $y) {
                continue;
            }

            $dist = $point[0] === $x ? abs($point[1] - $y) : abs($point[0] - $x);
            if ($min === null || $dist < $min) {
                $min = $dist;
                $index = $key;
            }
        }

        return $index;
    }
}
