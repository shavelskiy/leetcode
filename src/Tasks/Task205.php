<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/isomorphic-strings.
 * 86.29/98.79.
 */
final class Task205
{
    public function isIsomorphic(string $s, string $t): bool
    {
        $map = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($map[$s[$i]])) {
                if (in_array($t[$i], $map, true)) {
                    return false;
                }
                $map[$s[$i]] = $t[$i];
                continue;
            }

            if ($map[$s[$i]] !== $t[$i]) {
                return false;
            }
        }

        return true;
    }
}
