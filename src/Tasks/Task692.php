<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/top-k-frequent-words/
 * 21.74/65.22
 */
final class Task692
{
    /**
     * @param string[] $words
     *
     * @return string[]
     */
    public function topKFrequent(array $words, int $k): array
    {
        $map = [];
        foreach ($words as $word) {
            $map[$word] = ($map[$word] ?? 0) + 1;
        }

        $result = [];
        foreach ($map as $word => $count) {
            foreach ($result as $index => $current) {
                if ($count > $map[$current] || ($count === $map[$current] && $word < $current)) {
                    continue;
                }

                $result = [...array_slice($result, 0, $index), $word, ...array_slice($result, $index)];
                continue 2;
            }

            $result[] = $word;
        }

        return array_reverse(array_slice($result, $k * -1));
    }
}
