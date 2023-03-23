<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-the-duplicate-number/
 * 96.15/11.54
 */
final class Task287
{
    /**
     * @param int[] $nums
     */
    public function findDuplicate(array $nums): int
    {
        $map = [];
        foreach ($nums as $num) {
            if (isset($map[$num])) {
                return $num;
            }

            $map[$num] = true;
        }

        return 0;
    }
}
