<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Model\Heap1337 as Heap;

/**
 * https://leetcode.com/problems/the-k-weakest-rows-in-a-matrix/.
 */
final class Task1337
{
    /**
     * @param array<int[]> $mat
     *
     * @return int[]
     */
    public function kWeakestRows(array $mat, int $k): array
    {
        $n = count($mat[0]) - 1;

        $heap = new Heap();
        foreach ($mat as $i => $row) {
            $heap->insert([$i, $this->getSoldiers($row, $n)]);

            if ($heap->count() > $k) {
                $heap->extract();
            }
        }

        $result = [];
        while (!$heap->isEmpty()) {
            $result[] = $heap->extract()[0];
        }

        return array_reverse($result);
    }

    /**
     * @param int[] $row
     */
    public function getSoldiers(array $row, int $n): int
    {
        $start = 0;

        while ($start <= $n) {
            $current = intdiv($start + $n, 2);

            if ($row[$current] === 1) {
                if ($start === $n) {
                    return count($row);
                }

                $start = $current + 1;
            } else {
                if ($current === 0 || $row[$current - 1] === 1) {
                    return $current;
                }

                $n = $current - 1;
            }
        }

        return 0;
    }
}
