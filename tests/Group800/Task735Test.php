<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task735Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $asteroids
     *
     * @return int[]
     */
    public function test735(array $asteroids, array $result): void
    {
        $sut = new Task735();

        self::assertSame($sut->asteroidCollision($asteroids), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[-2, -2, 1, -2], [-2, -2, -2]],
            [[-2, -1, 1, 2], [-2, -1, 1, 2]],
            [[5, 10, -5], [5, 10]],
            [[8, -8], []],
            [[10, 2, -5], [10]],
        ];
    }
}
