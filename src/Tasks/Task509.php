<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/fibonacci-number/
 * 86.99/19.86
 */
final class Task509
{
    public function fib(int $n): int
    {
        if ($n === 0) {
            return 0;
        }

        $last = 0;
        $current = 1;
        for ($i = 2; $i <= $n; $i++) {
            $tmp = $last + $current;
            $last = $current;
            $current = $tmp;
        }

        return $current;
    }
}
