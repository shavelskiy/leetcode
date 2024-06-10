<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

/**
 * https://leetcode.com/problems/asteroid-collision/.
 * 70.00/100.00.
 */
final class Task735
{
    /**
     * @param int[] $asteroids
     *
     * @return int[]
     */
    public function asteroidCollision(array $asteroids): array
    {
        $stack = [];

        foreach ($asteroids as $asteroid) {
            $this->process($stack, $asteroid);
        }

        return $stack;
    }

    private function process(array &$stack, int $asteroid): void
    {
        while (true) {
            if (empty($stack)) {
                $stack[] = $asteroid;
                return;
            }

            $temp = array_pop($stack);

            if ($asteroid > 0 || $temp < 0) {
                $stack[] = $temp;
                $stack[] = $asteroid;
                return;
            }

            if ($temp > abs($asteroid)) {
                $stack[] = $temp;
                return;
            }

            if ($temp === abs($asteroid)) {
                return;
            }
        }
    }
}
