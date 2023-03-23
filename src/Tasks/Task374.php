<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/guess-number-higher-or-lower/
 * 72.23/27.27
 */
final class Task374
{
    private int $n = 0;

    /**
     * @param int $n
     */
    public function guessNumber($n): int
    {
        $min = 1;
        while ($min !== $n) {
            $current = (int)ceil(($min + $n) / 2);
            $result = $this->guess($current);

            if ($result === 0) {
                return $current;
            }

            if ($result === 1) {
                $min = $current + 1;
            } else {
                $n = $current - 1;
            }
        }

        return $min;
    }

    public function pick(int $n): void
    {
        $this->n = $n;
    }

    private function guess(int $num): int
    {
        if ($num === $this->n) {
            return 0;
        }

        return $num > $this->n ? -1 : 1;
    }
}
