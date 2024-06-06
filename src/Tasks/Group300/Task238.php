<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/product-of-array-except-self/.
 * 91.49/89.97.
 */
final class Task238
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function productExceptSelf(array $nums): array
    {
        $n = count($nums);
        $suffix = [];

        for ($i = 0; $i < $n; ++$i) {
            $suffix[$i] = ($suffix[$i - 1] ?? 1) * ($nums[$i - 1] ?? 1);
        }

        $result = array_fill(0, $n, null);

        $postfix = 1;
        for ($i = 0; $i < $n; ++$i) {
            $index = $n - $i - 1;
            $postfix = $postfix * ($nums[$n - $i] ?? 1);
            $result[$index] = $suffix[$index] * $postfix;
        }

        return $result;
    }
}
