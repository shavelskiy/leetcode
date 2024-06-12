<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

/**
 * https://leetcode.com/problems/reorder-routes-to-make-all-paths-lead-to-the-city-zero/.
 * 88.89/11.11.
 */
final class Task1466
{
    private array $in;
    private array $out;
    private int $result = 0;

    /**
     * @param array<int[]> $connections
     */
    public function minReorder(int $n, array $connections): int
    {
        $this->in = array_fill(0, $n, []);
        $this->out = array_fill(0, $n, []);
        foreach ($connections as $connection) {
            $this->in[$connection[1]][$connection[0]] = true;
            $this->out[$connection[0]][$connection[1]] = true;
        }

        $this->dfs(0);
        return $this->result;
    }

    private function dfs(int $node): void
    {
        foreach (array_keys($this->out[$node]) as $out) {
            ++$this->result;
            unset($this->in[$out][$node]);
            $this->dfs($out);
        }

        foreach (array_keys($this->in[$node]) as $in) {
            unset($this->out[$in][$node]);
            $this->dfs($in);
        }
    }
}
