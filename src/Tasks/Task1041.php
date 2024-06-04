<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/robot-bounded-in-circle/description/
 * 100/66.67.
 */
final class Task1041
{
    public function isRobotBounded(string $instructions): bool
    {
        $position = [0, 0];
        $direction = [0, 1];

        for ($i = 0; $i < strlen($instructions); ++$i) {
            switch ($instructions[$i]) {
                case 'L':
                case 'R':
                    $direction = [
                        $direction[0] === 0 ? $direction[1] * ($instructions[$i] === 'L' ? -1 : 1) : 0,
                        $direction[0] !== 0 ? $direction[0] * ($instructions[$i] === 'R' ? -1 : 1) : 0,
                    ];
                    break;
                case 'G':
                    $position = [$position[0] + $direction[0], $position[1] + $direction[1]];
                    break;
            }
        }

        return $position === [0, 0] || $direction !== [0, 1];
    }
}
