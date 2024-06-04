<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/sum-of-square-numbers/
 * 100/100.
 */
final class Task633
{
    public function judgeSquareSum(int $c): bool
    {
        $start = 0;
        $end = (int)ceil(sqrt($c));

        while ($start <= $end) {
            $current = $start ** 2 + $end ** 2;

            if ($current > $c) {
                --$end;
            } elseif ($current < $c) {
                ++$start;
            } else {
                return true;
            }
        }

        return false;
    }
}
