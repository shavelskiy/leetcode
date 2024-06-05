<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/jump-game/
 * 71.43/45.71.
 */
final class Task55
{
    /**
     * @param int[] $nums
     */
    public function canJump(array $nums): bool
    {
        $i = count($nums);
        $need = 0;
        while ($i > 1) {
            --$i;
            if ($nums[$i - 1] === 0) {
                ++$need;
                continue;
            }

            if ($nums[$i - 1] <= $need) {
                ++$need;
            } else {
                $need = 0;
            }
        }

        return $need === 0;
    }
}
