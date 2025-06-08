<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * 100/8.85
 */
final class Task27
{
    /**
     * @param int[] $nums
     */
    public function removeElement(array &$nums, int $val): int
    {
        $result = 0;
        $resultArr = [];
        foreach ($nums as $num) {
            if ($num !== $val) {
                $result++;
                $resultArr[] = $num;
            }
        }

        $nums = $resultArr;

        return $result;
    }
}
