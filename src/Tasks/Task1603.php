<?php

declare(strict_types=1);

namespace App\Tasks;

/**
 * https://leetcode.com/problems/design-parking-system/
 * 78.38/97.30.
 */
final class Task1603
{
    private array $count;

    public function __construct(int $big, int $medium, int $small)
    {
        $this->count = [$big, $medium, $small];
    }

    public function addCar(int $carType): bool
    {
        if ($this->count[$carType - 1] < 1) {
            return false;
        }

        --$this->count[$carType - 1];
        return true;
    }
}
