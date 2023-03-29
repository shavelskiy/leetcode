<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/special-array-with-x-elements-greater-than-or-equal-x/
 * 100/100
 */
final class Task1608
{
    /**
     * @param int[] $nums
     */
    public function specialArray(array $nums): int
    {
        $result = -1;
        $left = 0;
        $right = max($nums);

        while ($left <= $right) {
            $current = intdiv($left + $right, 2);
            $cout = 0;
            foreach ($nums as $num) {
                if ($num >= $current) {
                    $cout++;
                }
            }

            if ($cout > $current) {
                $left = $current + 1;
            } elseif ($cout < $current) {
                $right = $current - 1;
            } else {
                return $current;
            }
        }

        return $result;
    }
}
