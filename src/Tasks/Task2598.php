<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/number-of-even-and-odd-bits/
 * 40/70
 */
final class Task2598
{
    /**
     * @return int[]
     */
    public function evenOddBit(int $n): array
    {
        $i = 0;
        $even = 0;
        $odd = 0;

        while ($n > 0) {
            $kek = $n % 2;
            $n = intdiv($n, 2);

            if ($kek !== 1) {
                $i++;
                continue;
            }

            if ($i % 2 === 0) {
                $even++;
            } else {
                $odd++;
            }
            $i++;
        }

        return [$even, $odd];
    }
}
