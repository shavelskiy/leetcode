<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/can-make-arithmetic-progression-from-sequence/
 * 71.43/57.14
 */
final class Task1502
{
    /**
     * @param int[] $arr
     */
    public function canMakeArithmeticProgression(array $arr): bool
    {
        $n = count($arr);
        if ($n < 2) {
            return true;
        }

        sort($arr);
        $diff = $arr[1] - $arr[0];
        for ($i = 2; $i < $n; $i++) {
            if ($arr[$i] - $arr[$i - 1] !== $diff) {
                return false;
            }
        }

        return true;
    }
}
