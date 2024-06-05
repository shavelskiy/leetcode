<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

/**
 * https://leetcode.com/problems/find-all-anagrams-in-a-string/
 * 98.63/90.41.
 */
final class Task438
{
    /**
     * @return int[]
     */
    public function findAnagrams(string $s, string $p): array
    {
        $result = [];

        $n = strlen($p);
        $need = 0;
        $current = [];
        $map = [];

        for ($i = $n - 1; $i >= 0; --$i) {
            $map[$p[$i]] = ($map[$p[$i]] ?? 0) + 1;
            $current[$p[$i]] = 0;
            ++$need;
        }

        $offset = strlen($s) - $n;
        for ($i = strlen($s) - 1; $i >= 0; --$i) {
            $char = $s[$i];
            if (isset($map[$char])) {
                if ($current[$char] < $map[$char]) {
                    --$need;
                }
                ++$current[$char];
            }

            if ($i < $offset) {
                $char = $s[$i + $n];
                if (isset($map[$char])) {
                    if ($current[$char] <= $map[$char]) {
                        ++$need;
                    }
                    --$current[$char];
                }
            }

            if ($need <= 0) {
                $result[] = $i;
            }
        }

        return $result;
    }
}
