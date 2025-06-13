<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

/**
 * https://leetcode.com/problems/domino-and-tromino-tiling.
 */
final class Task790
{
    public function numTilings(int $n): int
    {
        $mod = 1e9 + 7;

        $map = [1, 2, 1];

        for ($i = 1; $i < $n; ++$i) {
            $map = [
                ($map[0] + $map[2]) % $mod,
                ($map[0] + $map[0] + $map[1]) % $mod,
                ($map[0] + $map[1]) % $mod,
            ];
        }

        return $map[0];
    }
}
