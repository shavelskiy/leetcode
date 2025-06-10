<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use SplMinHeap;

/**
 * 100/90
 * https://leetcode.com/problems/smallest-number-in-infinite-set/description/?envType=study-plan-v2.
 */
final class Task2336
{
    private SplMinHeap $minHeap;
    private int $smallest;
    private array $addedBack;

    public function __construct()
    {
        $this->minHeap = new SplMinHeap();
        $this->smallest = 1;
        $this->addedBack = [];
    }

    public function popSmallest(): int
    {
        if (!$this->minHeap->isEmpty()) {
            $num = $this->minHeap->extract();
            unset($this->addedBack[$num]);
            return $num;
        }

        ++$this->smallest;
        return $this->smallest - 1;
    }

    public function addBack(int $num): void
    {
        if ($num < $this->smallest && !isset($this->addedBack[$num])) {
            $this->minHeap->insert($num);
            $this->addedBack[$num] = true;
        }
    }
}
