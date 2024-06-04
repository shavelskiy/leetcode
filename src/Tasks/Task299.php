<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/bulls-and-cows/
 * 47.37/21.5.
 */
final class Task299
{
    public function getHint(string $secret, string $guess): string
    {
        $map = [];
        $guessMap = [];
        for ($i = strlen($secret) - 1; $i >= 0; --$i) {
            if (!isset($map[$secret[$i]])) {
                $map[$secret[$i]] = [];
            }

            $map[$secret[$i]][] = $i;

            if (!isset($guessMap[$guess[$i]])) {
                $guessMap[$guess[$i]] = [];
            }

            $guessMap[$guess[$i]][] = $i;
        }

        $a = 0;
        $b = 0;

        foreach ($guessMap as $num => $value) {
            if (!isset($map[$num])) {
                continue;
            }

            $curA = 0;
            foreach ($map[$num] as $position) {
                if (in_array($position, $value, true)) {
                    ++$curA;
                }
            }

            $a += $curA;
            $b += min(count($map[$num]), count($value)) - $curA;
        }

        return sprintf('%sA%sB', $a, $b);
    }
}
