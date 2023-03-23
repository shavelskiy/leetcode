<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/roman-to-integer/
 * 67.99/67.44
 */
final class Task13
{
    public function romanToInt(string $s): int
    {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $n = strlen($s);
        $result = 0;
        $i = 0;

        while ($i < $n) {
            if ($i + 1 < $n && $map[$s[$i + 1]] > $map[$s[$i]]) {
                $result += $map[$s[$i + 1]] - $map[$s[$i]];
                $i += 2;
                continue;
            }

            $result += $map[$s[$i]];
            $i++;
        }

        return $result;
    }
}
