<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/valid-perfect-square/
 * 70.97/100.
 */
final class Task367
{
    public function isPerfectSquare(int $num): bool
    {
        $start = 0;
        $end = $num;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);
            $square = $current ** 2;

            if ($square > $num) {
                $end = $current - 1;
            } elseif ($square < $num) {
                $start = $current + 1;
            } else {
                return true;
            }
        }

        return false;
    }
}
