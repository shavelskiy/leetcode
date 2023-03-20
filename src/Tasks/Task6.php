<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/zigzag-conversion/
 * 65.26/33.16.
 */
final class Task6
{
    public function convert(string $s, int $numRows): string
    {
        if ($numRows === 1) {
            return $s;
        }

        $result = '';
        $x = 2 * ($numRows - 1);

        for ($i = 1; $i <= $numRows; $i++) {
            $diff = in_array($i, [1, $numRows], true) ? null : ($i - 2);

            $j = 0;
            while (true) {
                $index = $i + $j * $x;
                if ($index > strlen($s)) {
                    break;
                }
                $result .= $s[$index - 1];

                if ($diff !== null) {
                    $k = ($j + 1) * $x - $diff;
                    if ($k <= strlen($s)) {
                        $result .= $s[$k - 1];
                    }
                }

                $j++;
            }
        }

        return $result;
    }
}
