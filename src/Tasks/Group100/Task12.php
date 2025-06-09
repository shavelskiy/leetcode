<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * 64.89/85.50.
 * https://leetcode.com/problems/integer-to-roman/description.
 */
final class Task12
{
    private const MAP = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function intToRoman(int $num): string
    {
        $result = '';

        foreach (self::MAP as $value => $symbol) {
            while ($num >= $value) {
                $result .= $symbol;
                $num -= $value;
            }
        }

        return $result;
    }
}
