<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

/**
 * https://leetcode.com/problems/unique-number-of-occurrences/.
 * 100.00/58.70.
 */
final class Task1207
{
    /**
     * @param int[] $arr
     */
    public function uniqueOccurrences(array $arr): bool
    {
        $hash = [];

        foreach ($arr as $num) {
            if (!isset($hash[$num])) {
                $hash[$num] = 0;
            }

            ++$hash[$num];
        }

        $resultHash = [];
        foreach ($hash as $count) {
            if (isset($resultHash[$count])) {
                return false;
            }

            $resultHash[$count] = true;
        }

        return true;
    }
}
