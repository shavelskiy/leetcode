<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/sum-of-all-odd-length-subarrays/
 * 72/64.
 */
final class Task1588
{
    /**
     * @param int[] $arr
     */
    public function sumOddLengthSubarrays(array $arr): int
    {
        $n = count($arr);
        $result = 0;
        for ($i = 0; $i < $n; ++$i) {
            $total = ($i + 1) * ($n - $i);
            $odd = intdiv($total, 2);

            if ($total % 2 === 1) {
                ++$odd;
            }

            $result += $odd * $arr[$i];
        }

        return $result;
    }
}
