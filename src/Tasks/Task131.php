<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/palindrome-partitioning/submissions/919505717/
 * 58.62/44.83.
 */
final class Task131
{
    /**
     * @return array<string[]>
     */
    public function partition(string $s): array
    {
        $result = [];

        for ($i = 1; $i <= strlen($s); $i++) {
            foreach ($this->find($s, $i) as $item) {
                $result[] = $item;
            }
        }

        return $result;
    }

    /**
     * @return iterable<string[]>
     */
    private function find(string $s, int $i): iterable
    {
        $substring = substr($s, 0, $i);

        if ($substring !== strrev($substring)) {
            return;
        }

        if (strlen($s) === $i) {
            yield [$substring];
            return;
        }

        foreach ($this->partition(substr($s, $i, strlen($s) - $i)) as $group) {
            yield [$substring, ...$group];
        }
    }
}
