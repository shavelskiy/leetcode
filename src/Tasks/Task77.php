<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/combinations/.
 */
final class Task77
{
    /**
     * @return array<int[]>
     */
    public function combine(int $n, int $k, int $start = 1): array
    {
        if ($start > $n) {
            return [];
        }

        $result = [];

        if ($k <= 1) {
            foreach (range($start, $n) as $item) {
                $result[] = [$item];
            }

            return $result;
        }

        foreach (range($start, $n) as $num) {
            foreach ($this->combine($n, $k - 1, $num + 1) as $item) {
                $result[] = [$num, ...$item];
            }
        }

        return $result;
    }
}
