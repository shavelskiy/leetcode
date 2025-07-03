<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/counting-bits
 * 67.44/53.49.
 */
final class Task338
{
    /**
     * @return int[]
     */
    public function countBits(int $n): array
    {
        $result = [0];

        for ($i = 1; $i <= $n; ++$i) {
            $result[$i] = $result[intdiv($i, 2)] + $i % 2;
        }

        return $result;
    }
}
