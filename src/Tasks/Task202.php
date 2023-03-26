<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/happy-number/
 * 69.7/92.78
 */
final class Task202
{
    public function isHappy(int $n): bool
    {
        $exists = [];
        while (!in_array($n, $exists, true)) {
            if ($n === 1) {
                return true;
            }

            $exists[] = $n;
            $n = $this->getSquare($n);
        }

        return false;
    }

    private function getSquare(int $n): int
    {
        $result = 0;
        while ($n > 0) {
            $result += ($n % 10) ** 2;
            $n = intdiv($n, 10);
        }

        return $result;
    }
}
