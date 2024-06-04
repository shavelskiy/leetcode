<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/check-if-one-string-swap-can-make-strings-equal/
 * 92.31/84.62.
 */
final class Task1790
{
    public function areAlmostEqual(string $s1, string $s2): bool
    {
        $n = strlen($s1);

        $swap = [];
        for ($i = 0; $i < $n; ++$i) {
            if ($s1[$i] === $s2[$i]) {
                continue;
            }

            if ($swap === null) {
                return false;
            }

            if (empty($swap)) {
                $swap = [$s1[$i], $s2[$i]];
                continue;
            }

            if ($swap !== [$s2[$i], $s1[$i]]) {
                return false;
            }

            $swap = null;
        }

        return $swap === null || $swap === [];
    }
}
