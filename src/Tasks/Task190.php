<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/reverse-bits/
 * 64.10/94.87
 */
final class Task190
{
    public function reverseBits(int $n): int
    {
        $result = 0;
        for ($i = 31; $i >= 0; $i--) {
            if (($n % 2) === 1) {
                $result += 2 ** $i;
            }

            $n = intdiv($n, 2);
        }

        return $result;
    }
}
