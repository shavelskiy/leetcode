<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/first-unique-character-in-a-string/
 * 43.28/59.70.
 */
final class Task387
{
    public function firstUniqChar(string $s): int
    {
        $map = [];
        $n = strlen($s);
        for ($i = 0; $i < $n; ++$i) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
        }

        for ($i = 0; $i < $n; ++$i) {
            if ($map[$s[$i]] === 1) {
                return $i;
            }
        }

        return -1;
    }
}
