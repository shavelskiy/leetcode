<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/best-time-to-buy-and-sell-stock/.
 * 80.31/83.75.
 */
final class Task121
{
    /**
     * @param int[] $prices
     */
    public function maxProfit(array $prices): int
    {
        $minPrice = null;
        $maxProfit = 0;

        foreach ($prices as $price) {
            if ($minPrice === null || $price < $minPrice) {
                $minPrice = $price;
                continue;
            }

            if ($price - $minPrice > $maxProfit) {
                $maxProfit = $price - $minPrice;
            }
        }

        return $maxProfit;
    }
}
