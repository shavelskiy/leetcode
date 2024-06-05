<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

/**
 * https://leetcode.com/problems/permutation-in-string/
 * 60.92/81.61.
 */
final class Task567
{
    private const NEED = 0;
    private const CURRENT = 1;

    public function checkInclusion(string $s1, string $s2): bool
    {
        $n1 = strlen($s1);
        $iterations = strlen($s2) - $n1;
        $need = $n1;
        $map = [];
        for ($i = 0; $i < $n1; ++$i) {
            if (!isset($map[$s1[$i]])) {
                $map[$s1[$i]] = [
                    self::NEED => 0,
                    self::CURRENT => 0,
                ];
            }

            ++$map[$s1[$i]][self::NEED];
        }

        for ($i = -1 * $n1; $i < $iterations; ++$i) {
            if ($i >= 0) {
                $prev = $s2[$i];
                if (isset($map[$prev])) {
                    --$map[$prev][self::CURRENT];
                    if ($map[$prev][self::CURRENT] < $map[$prev][self::NEED]) {
                        ++$need;
                    }
                }
            }

            $next = $s2[$i + $n1];
            if (isset($map[$next])) {
                if ($map[$next][self::CURRENT] < $map[$next][self::NEED]) {
                    --$need;
                    if ($need === 0) {
                        return true;
                    }
                }

                ++$map[$next][self::CURRENT];
            }
        }

        return false;
    }
}
