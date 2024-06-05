<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/robot-return-to-origin/description/
 * 87.60/87.50.
 */
final class Task657
{
    public function judgeCircle(string $moves): bool
    {
        $position = [0, 0];

        for ($i = strlen($moves) - 1; $i >= 0; --$i) {
            switch ($moves[$i]) {
                case 'U':
                    $position[1]++;
                    break;
                case 'D':
                    $position[1]--;
                    break;
                case 'R':
                    $position[0]++;
                    break;
                case 'L':
                    $position[0]--;
                    break;
            }
        }

        return $position === [0, 0];
    }
}
