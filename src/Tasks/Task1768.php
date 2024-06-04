<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/merge-strings-alternately/
 * 35.71/92.86.
 */
final class Task1768
{
    public function mergeAlternately(string $word1, string $word2): string
    {
        $n1 = strlen($word1);
        $n2 = strlen($word2);
        $i = 0;

        $result = '';

        while ($i < $n1 && $i < $n2) {
            $result .= $word1[$i] . $word2[$i];
            ++$i;
        }

        while ($i < $n1) {
            $result .= $word1[$i];
            ++$i;
        }

        while ($i < $n2) {
            $result .= $word2[$i];
            ++$i;
        }

        return $result;
    }
}
