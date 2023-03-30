<?php

namespace App\Tasks;

/**
 * https://leetcode.com/problems/permutations/
 * 23.73.22.3
 */
class Task46
{
    /**
     * @param int[] $nums
     * @return array<int[]>
     */
    public function permute(array $nums): array
    {
        $n = count($nums) - 1;

        $result = [];
        $current = $nums;
        sort($current);

        while (true) {
            $result[] = $current;

            $i = $n - 1;
            while ($i >= 0 && $current[$i] > $current[$i + 1]) {
                $i--;
            }

            if ($i < 0) {
                break;
            }

            $j = $n;
            while ($current[$j] < $current[$i]) {
                $j--;
            }

            $tmp = $current[$i];
            $current[$i] = $current[$j];
            $current[$j] = $tmp;

            if ($i < $n - 1) {
                $current = [...array_slice($current, 0, $i + 1), ...array_reverse(array_slice($current, $i + 1))];
            }
        }

        return $result;
    }
}
