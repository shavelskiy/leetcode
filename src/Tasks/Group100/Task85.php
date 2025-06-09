<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * 100/100
 * https://leetcode.com/problems/maximal-rectangle/description.
 */
final class Task85
{
    /**
     * @param array<string[]> $matrix
     */
    public function maximalRectangle(array $matrix): int
    {
        $cols = count($matrix[0]);

        $result = 0;
        $current = array_fill(0, $cols, 0);

        foreach ($matrix as $row) {
            for ($i = 0; $i < $cols; ++$i) {
                if ($row[$i] === '1') {
                    ++$current[$i];
                } else {
                    $current[$i] = 0;
                }
            }

            $result = max($result, $this->getArea($current));
        }

        return $result;
    }

    /**
     * @param int[] $arr
     */
    private function getArea(array $arr): int
    {
        $result = 0;

        $stack = [];
        $arr[] = -1;

        foreach ($arr as $i => $num) {
            if (!empty($stack) && $arr[$stack[count($stack) - 1]] > $num) {
                while (!empty($stack)) {
                    $index = array_pop($stack);

                    if ($arr[$index] < $num) {
                        $stack[] = $index;
                        break;
                    }

                    $left = !empty($stack) ? $stack[count($stack) - 1] : -1;

                    $result = max($result, $arr[$index] * ($i - $left - 1));
                }
            }

            $stack[] = $i;
        }

        return $result;
    }
}
