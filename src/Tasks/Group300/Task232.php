<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

/**
 * https://leetcode.com/problems/implement-queue-using-stacks/
 * 9.9/40.91.
 */
final class Task232
{
    private $queue = [];

    public function push(int $x): void
    {
        $this->queue[] = $x;
    }

    public function pop(): ?int
    {
        return array_shift($this->queue);
    }

    public function peek(): ?int
    {
        return $this->queue[0] ?? null;
    }

    public function empty(): bool
    {
        return empty($this->queue);
    }
}
