<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/is-subsequence.
 * 95.63/53.88.
 */
final class Task392
{
    public function isSubsequence(string $s, string $t): bool
    {
        if (empty($s)) {
            return true;
        }

        $i = 0;

        for ($j = 0; $j < strlen($t); $j++) {
            if ($t[$j] !== $s[$i]) {
                continue;
            }

            $i++;
            if ($i === strlen($s)) {
                return true;
            }
        }

        return false;
    }
}
