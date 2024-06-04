<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/longest-repeating-character-replacement/
 * 34.61/69.23.
 */
final class Task424
{
    public function characterReplacement(string $s, int $k): int
    {
        $map = [];
        $result = 0;

        $n = strlen($s);
        $left = 0;

        for ($right = 0; $right < $n; ++$right) {
            $map[$s[$right]] = ($map[$s[$right]] ?? 0) + 1;

            $lenght = $right - $left + 1;
            if ($lenght - max(array_values($map)) > $k) {
                --$map[$s[$left]];
                ++$left;
            } else {
                $result = max($result, $lenght);
            }
        }

        return $result;
    }
}
