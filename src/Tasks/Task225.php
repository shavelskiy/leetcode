<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/implement-stack-using-queues/
 * 83.33/66.67.
 */
final class Task225
{
    private array $values = [];
    private int $length = 0;

    public function push(int $x): void
    {
        $this->values[] = $x;
        ++$this->length;
    }

    public function pop(): ?int
    {
        if ($this->empty()) {
            return null;
        }

        --$this->length;
        return array_pop($this->values);
    }

    public function top(): ?int
    {
        if ($this->empty()) {
            return null;
        }

        return $this->values[$this->length - 1];
    }

    public function empty(): bool
    {
        return $this->length <= 0;
    }
}
