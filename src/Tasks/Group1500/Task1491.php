<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

/**
 * https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary/
 * 79.22/89.61.
 */
final class Task1491
{
    /**
     * @param int[] $salary
     */
    public function average(array $salary): float
    {
        $min = null;
        $max = null;
        $sum = 0;

        foreach ($salary as $item) {
            $sum += $item;

            if ($min === null || $item < $min) {
                $min = $item;
            }

            if ($max === null || $item > $max) {
                $max = $item;
            }
        }

        return ($sum - $min - $max) / (count($salary) - 2);
    }
}
