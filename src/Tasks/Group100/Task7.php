<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/reverse-integer/
 * 55.47/7.30.
 */
final class Task7
{
    public function reverse(int $x): int
    {
        $max = 2 ** 31 - 1;
        $mod = $x < 0 ? -1 : 1;
        $x = abs($x);
        $result = 0;

        $current = 1;
        while (intdiv($x, $current) >= 10) {
            $current *= 10;
        }

        $i = 1;
        while ($x > 0) {
            $result += intdiv($x, $current) * $i;
            if ($result > $max) {
                return 0;
            }
            $i *= 10;
            $x = $x % $current;
            $current = intdiv($current, 10);
        }

        return $result * $mod;
    }
}
