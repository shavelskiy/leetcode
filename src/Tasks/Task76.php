<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/minimum-window-substring/
 * 95.24/71.43
 */
final class Task76
{
    public function minWindow(string $s, string $t): string
    {
        $m = strlen($s);
        $n = strlen($t);

        $chars = [];
        $window = [];

        for ($i = 0; $i < $n; $i++) {
            $char = $t[$i];
            $chars[$char] = array_key_exists($char, $chars) ? ($chars[$char] + 1) : 1;
            $window[$char] = 0;
        }

        $have = 0;
        $need = count($chars);

        $leftIndex = 0;
        $startIndex = null;
        $resultLenght = null;

        for ($rightIndex = 0; $rightIndex < $m; $rightIndex++) {
            $char = $s[$rightIndex];
            if (!array_key_exists($char, $chars)) {
                continue;
            }

            $window[$char]++;

            if ($window[$char] === $chars[$char]) {
                $have++;
            }

            while ($have == $need && $leftIndex <= $rightIndex) {
                $leftChar = $s[$leftIndex];
                if (!array_key_exists($leftChar, $chars)) {
                    $leftIndex++;
                    continue;
                }

                if ($resultLenght === null || ($rightIndex - $leftIndex + 1) < $resultLenght) {
                    $startIndex = $leftIndex;
                    $resultLenght = $rightIndex - $leftIndex + 1;
                }

                $window[$leftChar]--;
                if ($window[$leftChar] < $chars[$leftChar]) {
                    $have--;
                }
                $leftIndex++;
            }
        }

        return $startIndex !== null && $resultLenght !== null ? substr($s, $startIndex, $resultLenght) : '';
    }
}
