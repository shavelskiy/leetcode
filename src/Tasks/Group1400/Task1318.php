<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

/**
 * https://leetcode.com/problems/minimum-flips-to-make-a-or-b-equal-to-c.
 * 100/0.
 */
final class Task1318
{
    public function minFlips(int $a, int $b, int $c): int
    {
        $result = 0;

        while ($a > 0 || $b > 0 || $c > 0) {
            $current = $a % 2 + $b % 2;

            if ($c % 2 === 0) {
                $result += $current;
            } elseif ($current === 0) {
                ++$result;
            }

            $a = intdiv($a, 2);
            $b = intdiv($b, 2);
            $c = intdiv($c, 2);
        }

        return $result;
    }
}
