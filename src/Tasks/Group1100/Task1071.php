<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

/**
 * https://leetcode.com/problems/greatest-common-divisor-of-strings/description/.
 */
final class Task1071
{
    public function gcdOfStrings(string $str1, string $str2): string
    {
        $n1 = strlen($str1);
        $n2 = strlen($str2);

        for ($i = min($n1, $n2); $i > 0; --$i) {
            if ($n1 % $i !== 0 || $n2 % $i !== 0) {
                continue;
            }

            $temp = substr($str1, 0, $i);

            if (str_repeat($temp, intdiv($n1, $i)) === $str1 && str_repeat($temp, intdiv($n2, $i)) === $str2) {
                return $temp;
            }
        }

        return '';
    }
}
