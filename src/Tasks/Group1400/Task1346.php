<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

/**
 * https://leetcode.com/problems/check-if-n-and-its-double-exist/
 * 61.54/12.82.
 */
final class Task1346
{
    /**
     * @param int[] $arr
     */
    public function checkIfExist(array $arr): bool
    {
        $arr1 = [];
        $arr2 = [];
        foreach ($arr as $num) {
            if ($num > 0) {
                $arr1[] = $num;
            } else {
                $arr2[] = abs($num);
            }
        }

        return $this->process($arr1) || $this->process($arr2);
    }

    private function process(array $arr): bool
    {
        sort($arr);

        for ($i = count($arr) - 1; $i > 0; --$i) {
            if (($arr[$i] % 2) > 0) {
                continue;
            }

            if ($this->search($arr, intdiv($arr[$i], 2), $i - 1)) {
                return true;
            }
        }

        return false;
    }

    private function search(array $arr, int $target, int $end): bool
    {
        $start = 0;

        while ($start <= $end) {
            $current = intdiv($start + $end, 2);

            if ($arr[$current] > $target) {
                $end = $current - 1;
            } elseif ($arr[$current] < $target) {
                $start = $current + 1;
            } else {
                return true;
            }
        }

        return false;
    }
}
