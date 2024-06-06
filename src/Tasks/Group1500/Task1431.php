<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

/**
 * https://leetcode.com/problems/kids-with-the-greatest-number-of-candies/
 * 19.21/97.18.
 */
final class Task1431
{
    /**
     * @param int[] $candies
     *
     * @return bool[]
     */
    public function kidsWithCandies(array $candies, int $extraCandies): array
    {
        $max = 0;
        foreach ($candies as $item) {
            if ($item > $max) {
                $max = $item;
            }
        }

        $result = [];
        foreach ($candies as $candies) {
            $result[] = $candies + $extraCandies >= $max;
        }

        return $result;
    }
}
