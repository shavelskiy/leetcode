<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/container-with-most-water/
 * 70.23/12.98
 */
final class Task11
{
    /**
     * @param int[] $height
     */
    public function maxArea(array $height): int
    {
        $result = 0;
        $i = 0;
        $j = count($height) - 1;

        while ($i < $j) {
            $result = max($result, ($j - $i) * min($height[$i], $height[$j]));
            if ($height[$i] < $height[$j]) {
                $i++;
            } else {
                $j--;
            }
        }

        return $result;
    }
}
