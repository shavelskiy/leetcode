<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/ransom-note/description/
 * 92.36/79.17.
 */
final class Task383
{
    public function canConstruct(string $ransomNote, string $magazine): bool
    {
        $n = strlen($magazine);
        $map = [];
        for ($i = 0; $i < $n; ++$i) {
            $map[$magazine[$i]] = ($map[$magazine[$i]] ?? 0) + 1;
        }

        $n = strlen($ransomNote);
        for ($i = 0; $i < $n; ++$i) {
            if (($map[$ransomNote[$i]] ?? 0) < 1) {
                return false;
            }

            --$map[$ransomNote[$i]];
        }

        return true;
    }
}
