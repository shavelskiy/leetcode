<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-smallest-letter-greater-than-target/
 * 45/70
 */
final class Task744
{
    /**
     * @param string[] $letters
     */
    public function nextGreatestLetter(array $letters, string $target): string
    {
        $start = 0;
        $end = count($letters) - 1;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);

            if ($letters[$current] > $target && ($current < 1 || $letters[$current - 1] <= $target)) {
                return $letters[$current];
            }

            if ($letters[$current] <= $target) {
                $start = $current + 1;
            } else {
                $end = $current - 1;
            }
        }

        return $letters[0];
    }
}
