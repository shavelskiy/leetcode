<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/minimum-penalty-for-a-shop/
 * 100/100
 */
final class Task2483
{
    public function bestClosingTime(string $customers): int
    {
        $length = strlen($customers);

        $current = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($customers[$i] === 'N') {
                $current++;
            }
        }

        $result = $length;
        $min = $current;
        for ($i = $length - 1; $i >= 0; $i--) {
            $current += $customers[$i] === 'Y' ? 1 : -1;

            if ($current <= $min) {
                $min = $current;
                $result = $i;
            }
        }

        return $result;
    }
}
