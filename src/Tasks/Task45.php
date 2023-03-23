<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/jump-game-ii/
 * 9.9/37.50
 */
final class Task45
{
    /**
     * @param int[] $nums
     */
    public function jump(array $nums): int
    {
        $n = count($nums);
        $map = array_fill(0, $n, null);
        $map[0] = 0;

        for ($i = 0; $i < $n - 1; $i++) {
            $current = $map[$i];
            for ($j = 1; $j <= $nums[$i]; $j++) {
                $index = $i + $j;
                if ($index === $n) {
                    break;
                }

                if ($map[$index] === null || $map[$index] > $current + 1) {
                    $map[$index] = $current + 1;
                }
            }
        }

        return $map[$n - 1];
    }
}
