<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

/**
 * https://leetcode.com/problems/find-the-difference-of-two-arrays/.
 */
final class Task2215
{
    /**
     * @param int[] $nums1
     * @param int[] $nums2
     *
     * @return array<int[]>
     */
    public function findDifference(array $nums1, array $nums2): array
    {
        return [
            $this->getResult($nums1, $this->getHashMap($nums2)),
            $this->getResult($nums2, $this->getHashMap($nums1)),
        ];
    }

    private function getHashMap(array $nums): array
    {
        $result = [];

        foreach ($nums as $num) {
            $result[$num] = true;
        }

        return $result;
    }

    private function getResult(array $nums, array $hash): array
    {
        $result = [];

        foreach ($nums as $num) {
            if (!isset($hash[$num])) {
                $result[$num] = true;
            }
        }

        return array_keys($result);
    }
}
