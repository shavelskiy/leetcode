<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/maximum-length-of-subarray-with-positive-product/
 * 100/100.
 */
final class Task1567
{
    /**
     * @param int[] $nums
     */
    public function getMaxLen(array $nums): int
    {
        $max = 0;
        $pos = 0;
        $neg = 0;

        foreach ($nums as $num) {
            if ($num > 0) {
                ++$pos;
                $neg = $neg > 0 ? $neg + 1 : 0;
            } elseif ($num < 0) {
                $tmp = $pos;
                $pos = $neg > 0 ? $neg + 1 : 0;
                $neg = $tmp + 1;
            } else {
                $pos = 0;
                $neg = 0;
            }

            $max = max($max, $pos);
        }

        return $max;
    }
}
