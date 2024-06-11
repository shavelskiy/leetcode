<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

/**
 * https://leetcode.com/problems/number-of-provinces/.
 * 14.81/29.26.
 */
final class Task547
{
    /**
     * @param array<int[]> $isConnected
     */
    public function findCircleNum($isConnected): int
    {
        $cities = array_fill(0, count($isConnected), []);

        for ($i = 0; $i < count($isConnected); ++$i) {
            for ($j = 0; $j < count($isConnected); ++$j) {
                if ($i !== $j && $isConnected[$i][$j] === 1) {
                    $cities[$i][] = $j;
                }
            }
        }

        $result = 0;
        for ($i = 0; $i < count($cities); ++$i) {
            if ($cities[$i] === null) {
                continue;
            }

            $lines = $cities[$i];

            while (!empty($lines)) {
                $item = array_shift($lines);
                if ($cities[$item] !== null) {
                    foreach ($cities[$item] as $line) {
                        if ($cities[$line] !== null) {
                            $lines[] = $line;
                        }
                    }
                    $cities[$item] = null;
                }
            }

            ++$result;
        }

        return $result;
    }
}
