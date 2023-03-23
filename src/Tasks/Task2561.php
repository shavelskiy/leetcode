<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/rearranging-fruits/
 * 100/100
 */
final class Task2561
{
    /**
     * @param int[] $basket1
     * @param int[] $basket2
     */
    public function minCost(array $basket1, array $basket2): int
    {
        $map1 = $this->getMap($basket1);
        $map2 = $this->getMap($basket2);

        $min = null;
        foreach ($this->joinMaps($map1, $map2) as $key => $item) {
            if ($min === null || $key < $min) {
                $min = $key;
            }

            if ($item % 2 > 0) {
                return -1;
            }

            $item = (int)($item / 2);
            $this->updateMap($map1, $key, $item);
            $this->updateMap($map2, $key, $item);
        }
        $min = $min !== null ? $min * 2 : 0;

        $tmp = [];
        foreach ($map1 as $value => $count) {
            for ($i = 0; $i < $count; $i++) {
                $tmp[] = $value;
            }
        }

        foreach ($map2 as $value => $count) {
            for ($i = 0; $i < $count; $i++) {
                $tmp[] = $value;
            }
        }

        sort($tmp);

        $result = 0;
        for ($i = 0; $i < count($tmp) / 2; $i++) {
            $result += (int)min([$tmp[$i], $min]);
        }

        return $result;
    }

    /**
     * @param int[] $basket
     *
     * @return array<int, int>
     */
    private function getMap(array $basket): array
    {
        $map = [];
        foreach ($basket as $num) {
            $map[$num] = isset($map[$num]) ? $map[$num] + 1 : 1;
        }

        return $map;
    }

    /**
     * @param array<int, int> $map1
     * @param array<int, int> $map2
     *
     * @return array<int, int>
     */
    private function joinMaps(array $map1, array $map2): array
    {
        foreach ($map2 as $key => $value) {
            $map1[$key] = isset($map1[$key]) ? $map1[$key] + $value : $value;
        }

        return $map1;
    }

    /**
     * @param array<int, int> $map
     */
    private function updateMap(array &$map, int $key, int $value): void
    {
        if (!isset($map[$key])) {
            return;
        }

        $map[$key] -= $value;

        if ($map[$key] < 1) {
            unset($map[$key]);
        }
    }
}
