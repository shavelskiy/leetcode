<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/n-queens/.
 * 66.67/16.67.
 */
final class Task51
{
    /**
     * @return array<string[]>
     */
    public function solveNQueens(int $n): array
    {
        $map = array_fill(0, $n, array_fill(0, $n, true));

        $result = [];
        foreach ($this->fill($map, $n) as $item) {
            $result[] = $this->formatResult($item);
        }

        return $result;
    }

    /**
     * @param array<array<int, bool>> $map
     *
     * @return array<int[]>
     */
    private function fill(array $map, int $count): array
    {
        $i = count($map) - $count;

        $result = [];
        foreach ($map[$i] ?? [] as $j => $item) {
            if (!$item) {
                continue;
            }

            if ($i === count($map) - 1) {
                $result[] = [$j];
                continue;
            }

            foreach ($this->fill($this->updateMap($map, $i, $j), $count - 1) as $item) {
                $result[] = [$j, ...$item];
            }
        }

        return $result;
    }

    /**
     * @param array<array<int, bool>> $map
     *
     * @return array<array<int, bool>>
     */
    private function updateMap(array $map, int $i, int $j): array
    {
        for ($k = $i + 1; $k < count($map); $k++) {
            $map[$k][$j] = false;

            if ($j + $k - $i < count($map)) {
                $map[$k][$j + $k - $i] = false;
            }

            if ($j - $k + $i >= 0) {
                $map[$k][$j - $k + $i] = false;
            }
        }

        return $map;
    }

    /**
     * @param int[] $input
     *
     * @return string[]
     */
    private function formatResult(array $input): array
    {
        $output = str_repeat('.', count($input));
        $result = [];

        foreach ($input as $item) {
            $tmp = $output;
            $tmp[$item] = 'Q';
            $result[] = $tmp;
        }

        return $result;
    }
}
