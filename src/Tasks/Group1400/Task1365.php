<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

/**
 * https://leetcode.com/problems/how-many-numbers-are-smaller-than-the-current-number/
 * 100/100.
 */
final class Task1365
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function smallerNumbersThanCurrent(array $nums): array
    {
        $map = [];

        foreach ($nums as $num) {
            if (!isset($map[$num])) {
                $map[$num] = 0;
            }

            ++$map[$num];
        }

        ksort($map);

        $result = [];
        foreach ($nums as $num) {
            $item = 0;

            foreach ($map as $key => $value) {
                if ($key >= $num) {
                    break;
                }

                $item += $value;
            }

            $result[] = $item;
        }

        return $result;
    }
}
