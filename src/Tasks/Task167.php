<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/.
 * 82.32/76.92.
 */
final class Task167
{
    /**
     * @param int[] $numbers
     *
     * @return int[]
     */
    public function twoSum(array $numbers, int $target): array
    {
        $i = 0;
        $j = count($numbers) - 1;

        while ($i < $j) {
            $sum = $numbers[$i] + $numbers[$j];
            if ($sum === $target) {
                return [$i + 1, $j + 1];
            }

            if ($sum > $target) {
                $j--;
            } else {
                $i++;
            }
        }

        return [];
    }
}
