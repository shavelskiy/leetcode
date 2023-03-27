<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/find-the-distance-value-between-two-arrays/
 * 20/40
 */
final class Task1385
{
    /**
     * @param int[] $arr1
     * @param int[] $arr2
     */
    public function findTheDistanceValue(array $arr1, array $arr2, int $d): int
    {
        $arr2 = array_unique($arr2);
        $n = count($arr2);
        sort($arr2);

        $result = 0;
        foreach ($arr1 as $item) {
            if ($this->isValid($item, $arr2, $n, $d)) {
                $result++;
            }
        }

        return $result;
    }

    private function isValid(int $x, array $arr2, $n, int $d): bool
    {
        $start = 0;
        $end = $n;
        while ($start <= $end) {
            $current = intdiv($start + $end, 2);
            $curDiff = abs($x - $arr2[$current]);

            if ($current + 1 < $n && $curDiff > abs($x - $arr2[$current + 1])) {
                $start = $current + 1;
            } elseif ($current > 0 && $curDiff > abs($x - $arr2[$current - 1])) {
                $end = $current - 1;
            } else {
                return $curDiff > $d;
            }
        }

        return false;
    }
}
