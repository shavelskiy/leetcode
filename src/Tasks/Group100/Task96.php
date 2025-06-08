<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * 100/0
 * https://leetcode.com/problems/unique-binary-search-trees/?envType=problem-list-v2.
 */
final class Task96
{
    private array $map = [
        0 => 0,
    ];

    public function numTrees(int $n): int
    {
        if (isset($this->map[$n])) {
            return $this->map[$n];
        }

        $result = 0;

        for ($i = 0; $i < $n; ++$i) {
            $left = $this->numTrees($i);
            $right = $this->numTrees($n - $i - 1);
            $result += ($left > 0 ? $left : 1) * ($right > 0 ? $right : 1);
        }

        $this->map[$n] = $result;

        return $result;
    }
}
