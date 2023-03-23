<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/letter-combinations-of-a-phone-number/
 * 62.32/52.17
 */
final class Task17
{
    private const MAP = [
        [' '],
        [],
        ['a', 'b', 'c'],
        ['d', 'e', 'f'],
        ['g', 'h', 'i'],
        ['j', 'k', 'l'],
        ['m', 'n', 'o'],
        ['p', 'q', 'r', 's'],
        ['t', 'u', 'v'],
        ['w', 'x', 'y', 'z'],
    ];

    /**
     * @return string[]
     */
    public function letterCombinations(string $digits): array
    {
        if (empty($digits)) {
            return [];
        }

        if (strlen($digits) === 1) {
            return self::MAP[(int)$digits];
        }

        $result = [];

        foreach ($this->letterCombinations(substr($digits, 1)) as $item) {
            foreach (self::MAP[(int)$digits[0]] as $char) {
                $result[] = $char . $item;
            }
        }

        return $result;
    }
}
