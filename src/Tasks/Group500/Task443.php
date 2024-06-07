<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

/**
 * https://leetcode.com/problems/string-compression/.
 * 5.66/28.30.
 */
final class Task443
{
    /**
     * @param string[] $chars
     */
    public function compress(array &$chars): int
    {
        $prev = null;
        $count = 0;
        $i = 0;

        do {
            if ($prev === null) {
                $count = 1;
                $prev = $i;
                ++$i;
                continue;
            }

            if (isset($chars[$i]) && $chars[$i] === $chars[$prev]) {
                ++$count;
                ++$i;
                continue;
            }

            $part = [$chars[$prev], ...($count > 1 ? str_split((string)$count) : [])];

            array_splice($chars, $prev, $count, $part);

            $i = $prev + count($part);
            $prev = null;
        } while ($i <= count($chars));

        return count($chars);
    }
}
