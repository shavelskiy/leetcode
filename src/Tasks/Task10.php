<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/regular-expression-matching/
 * 95.59/82.35.
 */
final class Task10
{
    public function isMatch(string $s, string $p): bool
    {
        $n = strlen($s);
        $m = strlen($p);
        $dp = array_fill(0, $n + 1, array_fill(0, $m + 1, false));
        $dp[$n][$m] = true;

        for ($i = $n; $i >= 0; --$i) {
            for ($j = $m - 1; $j >= 0; --$j) {
                $firstMatch = $i < $n && ($p[$j] === $s[$i] || $p[$j] === '.');

                if ($j + 1 < $m && $p[$j + 1] === '*') {
                    $dp[$i][$j] = $dp[$i][$j + 2] || ($firstMatch && $dp[$i + 1][$j]);
                } else {
                    $dp[$i][$j] = $firstMatch && $dp[$i + 1][$j + 1];
                }
            }
        }

        return $dp[0][0];
    }
}
