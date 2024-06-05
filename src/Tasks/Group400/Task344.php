<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/reverse-string/
 * 81.77/74.88.
 */
final class Task344
{
    /**
     * @param string[] $s
     */
    public function reverseString(array &$s): void
    {
        $n = count($s);
        $count = intdiv($n, 2);

        for ($i = 0; $i < $count; ++$i) {
            $tmp = $s[$n - 1 - $i];
            $s[$n - 1 - $i] = $s[$i];
            $s[$i] = $tmp;
        }
    }
}
