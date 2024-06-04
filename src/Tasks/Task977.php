<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/squares-of-a-sorted-array/
 * 97.33/5.35.
 */
final class Task977
{
    /**
     * @param int[] $nums
     *
     * @return int[]
     */
    public function sortedSquares($nums): array
    {
        $result = [];
        $i = 0;

        $this->process($result, $nums, $i);

        return $result;
    }

    /**
     * @param int[] $result
     * @param int[] $nums
     */
    private function process(array &$result, array $nums, int &$i, ?int $negative = null): void
    {
        while ($i < count($nums)) {
            $num = $nums[$i];

            if ($num < 0) {
                ++$i;
                $this->process($result, $nums, $i, abs($num));
                $result[] = $num * $num;
                continue;
            }

            if ($negative !== null && $negative < $num) {
                break;
            }

            $result[] = $num * $num;
            ++$i;
        }
    }
}
