<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/permutation-in-string/
 * 55.17/49.43
 */
final class Task567
{
    public function checkInclusion(string $s1, string $s2): bool
    {
        $n1 = strlen($s1);
        $need = $n1;
        $map = [];
        for ($i = 0; $i < $n1; $i++) {
            if (!isset($map[$s1[$i]])) {
                $map[$s1[$i]] = [
                    'need' => 0,
                    'current' => 0,
                ];
            }

            $map[$s1[$i]]['need']++;
        }

        for ($i = 0; $i < $n1; $i++) {
            if (!isset($map[$s2[$i]])) {
                continue;
            }

            if ($map[$s2[$i]]['current'] < $map[$s2[$i]]['need']) {
                $need--;
            }

            $map[$s2[$i]]['current']++;
        }

        if ($need === 0) {
            return true;
        }

        for ($i = 1; $i <= strlen($s2) - $n1; $i++) {
            $prev = $s2[$i - 1];
            if (isset($map[$prev])) {
                $map[$prev]['current']--;
                if ($map[$prev]['current'] < $map[$prev]['need']) {
                    $need++;
                }
            }

            $next = $s2[$i + $n1 - 1];
            if (isset($map[$next])) {
                if ($map[$next]['current'] < $map[$next]['need']) {
                    $need--;
                    if ($need === 0) {
                        return true;
                    }
                }

                $map[$next]['current']++;
            }
        }

        return false;
    }
}
