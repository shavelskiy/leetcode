<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/dota2-senate/.
 * 100.00/30.77.
 */
final class Task649
{
    public function predictPartyVictory(string $senate): string
    {
        $r = 0;
        $d = 0;
        $prev = str_split($senate);

        do {
            $current = [];

            foreach ($prev as $item) {
                if ($item === 'R') {
                    if ($r >= 0) {
                        $current[] = 'R';
                        --$d;
                    } else {
                        ++$r;
                    }
                } else {
                    if ($d >= 0) {
                        $current[] = 'D';
                        --$r;
                    } else {
                        ++$d;
                    }
                }
            }

            $prev = $current;
        } while (count(array_unique($current)) > 1);

        return $current[0] === 'R' ? 'Radiant' : 'Dire';
    }
}
