<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/richest-customer-wealth/description/
 * 33.22/23.83
 */
final class Task1672
{
    /**
     * @param array>int[]> $accounts
     */
    public function maximumWealth(array $accounts): int
    {
        $max = 0;
        foreach ($accounts as $account) {
            $current = 0;
            foreach ($account as $item) {
                $current += $item;
            }

            $max = max($max, $current);
        }

        return $max;
    }
}
