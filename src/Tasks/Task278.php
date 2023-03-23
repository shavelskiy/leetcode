<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/first-bad-version/
 * 16.24/61.93
 */
final class Task278
{
    private int $bad = 0;

    /**
     * @param int $n
     */
    public function firstBadVersion($n, int $start = 1): int
    {
        if ($this->isBadVersion($start)) {
            return $start;
        }

        $middle = (int)floor(($n + $start) / 2);

        return $this->isBadVersion($middle)
            ? $this->firstBadVersion($middle - 1, $start)
            : $this->firstBadVersion($n, $middle + 1);
    }

    public function input(int $bad): void
    {
        $this->bad = $bad;
    }

    public function isBadVersion(int $version): bool
    {
        return $version >= $this->bad;
    }
}
