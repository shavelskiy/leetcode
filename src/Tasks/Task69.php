<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/sqrtx/
 * 47.56/31/18
 */
final class Task69
{
    public function mySqrt(int $x): int
    {
        $start = 0;
        $end = $x;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);
            $square = $current ** 2;

            if ($square <= $x && ($current + 1) ** 2 > $x) {
                return $current;
            }

            if ($square > $x) {
                $end = $current - 1;
            } else {
                $start = $current + 1;
            }
        }

        return 0;
    }
}
