<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/subtract-the-product-and-sum-of-digits-of-an-integer/description/
 * 40.54/59.46.
 */
final class Task1281
{
    public function subtractProductAndSum(int $n): int
    {
        $sum = 0;
        $pr = 1;

        while ($n > 0) {
            $tmp = $n % 10;
            $n = intdiv($n, 10);
            $sum += $tmp;
            $pr *= $tmp;
        }

        return $pr - $sum;
    }
}
