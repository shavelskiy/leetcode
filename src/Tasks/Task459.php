<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/repeated-substring-pattern/
 * 90.00/70.00
 */
final class Task459
{
    function repeatedSubstringPattern(string $s): bool
    {
        $n = strlen($s);
        for ($i = (int)($n / 2); $i > 0; $i--) {
            if ($n % $i !== 0) {
                continue;
            }

            $tmp = str_repeat(substr($s, 0, $i), $n / $i);

            if ($tmp === $s) {
                return true;
            }
        }

        return false;
    }
}
