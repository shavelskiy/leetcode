<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

/**
 * https://leetcode.com/problems/number-of-recent-calls/.
 * 8.33/100.00.
 */
final class Task933
{
    /** var int[] */
    private array $times = [];

    public function ping(int $t): int
    {
        $this->times[] = $t;

        $result = 0;
        foreach ($this->times as $time) {
            if ($time >= $t - 3000 && $time <= $t) {
                ++$result;
            }
        }

        return $result;
    }
}
