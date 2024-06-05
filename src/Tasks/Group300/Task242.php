<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/valid-anagram/
 * 78.42/97.89.
 */
final class Task242
{
    public function isAnagram(string $s, string $t): bool
    {
        $n = strlen($s);

        if ($n !== strlen($t)) {
            return false;
        }

        $map = [];
        for ($i = 0; $i < $n; ++$i) {
            $map[$s[$i]] = ($map[$s[$i]] ?? 0) + 1;
            $map[$t[$i]] = ($map[$t[$i]] ?? 0) - 1;
        }

        foreach ($map as $result) {
            if ($result !== 0) {
                return false;
            }
        }

        return true;
    }
}
