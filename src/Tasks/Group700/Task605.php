<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/can-place-flowers/
 * 92.00/90.40.
 */
final class Task605
{
    /**
     * @param int[] $flowerbed
     */
    public function canPlaceFlowers(array $flowerbed, int $n): bool
    {
        if ($n === 0) {
            return true;
        }

        $prev = false;
        for ($i = 0; $i < count($flowerbed); ++$i) {
            if ($flowerbed[$i] === 1) {
                $prev = true;
                continue;
            }

            if ($prev) {
                $prev = $flowerbed[$i] === 1;
                continue;
            }

            if (($flowerbed[$i + 1] ?? 0) === 0) {
                $prev = true;
                --$n;

                if ($n === 0) {
                    return true;
                }
            }
        }

        return false;
    }
}
