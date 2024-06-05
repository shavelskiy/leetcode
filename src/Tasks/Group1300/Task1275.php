<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

/**
 * https://leetcode.com/problems/find-winner-on-a-tic-tac-toe-game/description/
 * 100/100.
 */
final class Task1275
{
    /**
     * @param array<int[]> $moves
     */
    public function tictactoe(array $moves): string
    {
        $map = array_fill(0, 3, array_fill(0, 3, null));

        foreach ($moves as $key => $move) {
            $map[$move[0]][$move[1]] = $key % 2 === 0 ? 'A' : 'B';
        }

        $d1 = '';
        $d2 = '';
        for ($i = 0; $i < 3; ++$i) {
            $line = '';
            $column = '';

            $this->process($map[$i][$i], $d1);
            $this->process($map[2 - $i][$i], $d2);

            for ($j = 0; $j < 3; ++$j) {
                $this->process($map[$i][$j], $line);
                $this->process($map[$j][$i], $column);

                if ($line === null && $column === null) {
                    break;
                }
            }

            if ($line !== null || $column !== null) {
                return $line ?? $column;
            }
        }

        if ($d1 !== null || $d2 !== null) {
            return $d1 ?? $d2;
        }

        return count($moves) < 9 ? 'Pending' : 'Draw';
    }

    private function process(?string $value, ?string &$temp): void
    {
        if ($temp === null) {
            return;
        }

        if ($value === null) {
            $temp = null;
            return;
        }

        if ($temp === '') {
            $temp = $value;
            return;
        }

        if ($temp !== $value) {
            $temp = null;
        }
    }
}
