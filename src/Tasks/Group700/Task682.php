<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

/**
 * https://leetcode.com/problems/baseball-game/
 * 100.00/80.77.
 */
final class Task682
{
    /**
     * @param string[] $operations
     */
    public function calPoints(array $operations): int
    {
        $length = 0;
        $result = [];

        foreach ($operations as $operation) {
            switch ($operation) {
                case '+':
                    $result[] = $result[$length - 1] + $result[$length - 2];
                    ++$length;
                    break;
                case 'D':
                    $result[] = $result[$length - 1] * 2;
                    ++$length;
                    break;
                case 'C':
                    array_pop($result);
                    --$length;
                    break;
                default:
                    $result[] = (int)$operation;
                    ++$length;
            }
        }

        $sum = 0;
        foreach ($result as $item) {
            $sum += $item;
        }

        return $sum;
    }
}
