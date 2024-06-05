<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

/**
 * https://leetcode.com/problems/spiral-matrix/description/
 * 84.06/24.64.
 */
final class Task54
{
    /**
     * @param array<int[]> $matrix
     *
     * @return int
     */
    public function spiralOrder(array $matrix): array
    {
        $result = [];

        $n = count($matrix);
        $m = count($matrix[0]);

        for ($k = 0; $k < min($n, $m); ++$k) {
            $offset = (int)floor($k / 2);
            if ($k % 2 === 0) {
                for ($i = $offset; $i < ($m - $offset); ++$i) {
                    $result[] = $matrix[$offset][$i];
                }

                for ($i = $offset + 1; $i < ($n - $offset); ++$i) {
                    $result[] = $matrix[$i][$m - $offset - 1];
                }
            } else {
                for ($i = $m - $offset - 2; $i >= $offset; --$i) {
                    $result[] = $matrix[$n - 1 - $offset][$i];
                }

                for ($i = $n - $offset - 2; $i > $offset; --$i) {
                    $result[] = $matrix[$i][$offset];
                }
            }
        }

        return $result;
    }
}
