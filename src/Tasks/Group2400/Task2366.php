<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

final class Task2366
{
    /**
     * @param int[] $nums
     */
    public function minimumReplacement(array $nums): int
    {
        $result = 0;

        for ($i = count($nums) - 2; $i >= 0; --$i) {
            if ($nums[$i] <= $nums[$i + 1]) {
                continue;
            }

            $current = ($nums[$i] + $nums[$i + 1] - 1) / $nums[$i + 1];
            $current = (int)floor($current);
            $result += $current - 1;
            $nums[$i] = (int)floor($nums[$i] / $current);
        }

        return $result;
    }
}
