<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/contains-duplicate.
 * 52.16/51.38.
 */
final class Task217
{
    /**
     * @param int[] $nums
     */
    public function containsDuplicate(array $nums): bool
    {
        $map = [];
        foreach ($nums as $num) {
            if (isset($map[$num])) {
                return true;
            }

            $map[$num] = true;
        }

        return false;
    }
}
