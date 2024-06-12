<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

/**
 * https://leetcode.com/problems/evaluate-division/.
 * 100.00/50.00.
 */
final class Task399
{
    /**
     * @param array<string[]> $equations
     * @param float[]         $values
     * @param array<string[]> $queries
     *
     * @return float[]
     */
    public function calcEquation(array $equations, array $values, array $queries): array
    {
        $map = $this->buildMap($equations, $values);

        $result = [];

        foreach ($queries as $query) {
            $visited = [];
            $result[] = $this->dfs($map, $query[0], $query[1], $visited) ?? -1.0;
        }

        return $result;
    }

    private function dfs(array $map, string $node, string $to, array &$visited): ?float
    {
        if (!isset($map[$node])) {
            return null;
        }

        if ($node === $to) {
            return 1.0;
        }

        $visited[$node] = true;

        foreach ($map[$node] as $out => $value) {
            if (isset($visited[$out])) {
                continue;
            }
            $temp = $this->dfs($map, $out, $to, $visited);

            if ($temp !== null) {
                return $value * $temp;
            }
        }

        return null;
    }

    private function buildMap(array $equations, array $values): array
    {
        $map = [];

        foreach ($equations as $i => $equation) {
            [$from, $to] = $equation;

            if (!isset($map[$from])) {
                $map[$from] = [];
            }

            if (!isset($map[$to])) {
                $map[$to] = [];
            }

            $map[$from][$to] = $values[$i];
            $map[$to][$from] = 1 / $values[$i];
        }

        return $map;
    }
}
