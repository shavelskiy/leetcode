<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/coin-change/
 * 51.52/72.3.
 */
final class Task322
{
    /**
     * @param int[] $coins
     */
    public function coinChange(array $coins, int $amount): int
    {
        /** @var int[] */
        $map = [0];

        for ($i = 1; $i <= $amount; ++$i) {
            $map[$i] = null;
            foreach ($coins as $coin) {
                $prevValue = $map[$i - $coin] ?? null;
                if ($prevValue === null) {
                    continue;
                }

                $map[$i] = $map[$i] === null ? ($prevValue + 1) : min($map[$i], $prevValue + 1);
            }
        }

        return $map[$amount] ?? -1;
    }
}
