<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/plus-one/
 */
final class Task66
{
    /**
     * @param int[] $digits
     *
     * @return int[]
     */
    public function plusOne(array $digits): array
    {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $digits[$i]++;
            if ($digits[$i] < 10) {
                return $digits;
            }

            $digits[$i] = 0;
        }

        return [1, ...$digits];
    }
}
