<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/course-schedule/
 * 23.8/76.92.
 */
final class Task207
{
    /**
     * @param array<int> $prerequisites
     */
    public function canFinish(int $numCourses, array $prerequisites): bool
    {
        $map = [];
        for ($i = 0; $i < $numCourses; ++$i) {
            $map[$i] = [];
        }

        foreach ($prerequisites as $item) {
            $map[$item[0]][] = $item[1];
        }

        do {
            $find = false;
            foreach ($map as $num => $reqs) {
                if ($reqs === []) {
                    $find = true;
                    $map = $this->delete($map, $num);
                }
            }
        } while ($find === true);

        return $map === [];
    }

    private function delete(array $map, int $num): array
    {
        unset($map[$num]);

        foreach ($map as $key => $reqs) {
            if (in_array($num, $reqs, true)) {
                $map[$key] = array_filter($reqs, fn (int $current) => $current !== $num);
            }
        }

        return $map;
    }
}
