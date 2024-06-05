<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/find-the-difference/
 * 80.65/58.6.
 */
final class Task389
{
    public function findTheDifference(string $s, string $t): string
    {
        $map = [];

        $n = strlen($s);
        for ($i = 0; $i < $n; ++$i) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
            $map[$t[$i]] = ($map[$t[$i]] ?? 0) - 1;
        }
        $map[$t[$n]] = ($map[$t[$n]] ?? 0) - 1;

        foreach ($map as $char => $count) {
            if ($count < 0) {
                return $char;
            }
        }

        return '';
    }
}
