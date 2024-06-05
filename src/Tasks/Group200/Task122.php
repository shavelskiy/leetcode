<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

/**
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/
 * 76.60/98.94.
 */
final class Task122
{
    /**
     * @param int[] $prices
     */
    public function maxProfit(array $prices): int
    {
        $result = 0;
        for ($i = 1; $i < count($prices); ++$i) {
            if ($prices[$i] > $prices[$i - 1]) {
                $result += $prices[$i] - $prices[$i - 1];
            }
        }

        return $result;
    }
}
