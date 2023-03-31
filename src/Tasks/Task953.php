<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/verifying-an-alien-dictionary/
 * 41.76/54.95
 */
final class Task953
{
    /**
     * @param string[] $words
     */
    public function isAlienSorted(array $words, string $order): bool
    {
        $map = [];
        $n = strlen($order);
        for ($i = 0; $i < $n; $i++) {
            $map[$order[$i]] = $i;
        }

        $n = count($words) - 1;
        for ($i = 0; $i < $n; $i++) {
            if (!$this->compare($words[$i], $words[$i + 1], $map)) {
                return false;
            }
        }

        return true;
    }

    private function compare(string $word1, string $word2, array $map): bool
    {
        if ($word1 === $word2) {
            return true;
        }

        $n1 = strlen($word1);
        $n2 = strlen($word2);

        $i = 0;
        while ($i < $n1 && $i < $n2) {
            if ($word1[$i] === $word2[$i]) {
                $i++;
                continue;
            }

            return $map[$word1[$i]] < $map[$word2[$i]];
        }

        return $n2 >= $n1;
    }
}
