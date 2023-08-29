<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/determine-if-string-halves-are-alike/submissions/
 * 100/62.5
 */
final class Task1704
{
    private const VOWES = ['a', 'e', 'i', 'o', 'u'];

    public function halvesAreAlike(string $s): bool
    {
        $lengh = strlen($s);
        $k = $lengh / 2;

        $result = 0;
        for ($i = 0; $i < $k; $i++) {
            $result += in_array(strtolower($s[$i]), self::VOWES, true) ? 1 : -1;
            $result += in_array(strtolower($s[$lengh - $i - 1]), self::VOWES, true) ? -1 : 1;
        }

        return $result === 0;
    }
}
