<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/sign-of-the-product-of-an-array/
 * 40.91/9.9
 */
final class Task1822
{
    /**
     * @param int[] $nums
     */
    public function arraySign(array $nums): int
    {
        $positive = true;
        foreach ($nums as $num) {
            if ($num === 0) {
                return 0;
            }

            if ($num < 0) {
                $positive = !$positive;
            }
        }

        return $positive ? 1 : -1;
    }
}
