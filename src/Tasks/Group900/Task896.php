<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

/**
 * https://leetcode.com/problems/monotonic-array/
 * 90.00/70.00.
 */
final class Task896
{
    /**
     * @param int[] $nums
     */
    public function isMonotonic(array $nums): bool
    {
        $higher = null;
        for ($i = count($nums) - 1; $i > 0; --$i) {
            if ($nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $tmp = $nums[$i] > $nums[$i - 1];
            if ($higher === null) {
                $higher = $tmp;
                continue;
            }

            if ($higher !== $tmp) {
                return false;
            }
        }

        return true;
    }
}
