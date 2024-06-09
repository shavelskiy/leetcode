<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

/**
 * https://leetcode.com/problems/maximum-number-of-vowels-in-a-substring-of-given-length/.
 * 97.96/30.61.
 */
final class Task1456
{
    private const CHARS = ['a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true];

    public function maxVowels(string $s, int $k): int
    {
        $count = 0;

        for ($i = 0; $i < $k; ++$i) {
            if (isset(self::CHARS[$s[$i]])) {
                ++$count;
            }
        }

        $max = $count;
        $left = 0;
        $right = $k - 1;

        while ($right < strlen($s) - 1) {
            if (isset(self::CHARS[$s[$left]])) {
                --$count;
            }

            ++$left;
            ++$right;

            if (isset(self::CHARS[$s[$right]])) {
                ++$count;
            }

            if ($count > $max) {
                $max = $count;

                if ($max === $k) {
                    return $max;
                }
            }
        }

        return $max;
    }
}
