<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/number-of-1-bits/
 * 67.57/66.67.
 */
final class Task191
{
    public function hammingWeight(int $n): int
    {
        $result = 0;

        while ($n > 0) {
            if ($n % 2 > 0) {
                ++$result;
            }
            $n = intdiv($n, 2);
        }
        return $result;
    }
}
