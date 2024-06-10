<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2352Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $grid
     */
    public function test2352(array $grid, int $result): void
    {
        $sut = new Task2352();

        self::assertSame($sut->equalPairs($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[11, 1], [1, 11]], 2],
            [[[3, 2, 1], [1, 7, 6], [2, 7, 7]], 1],
            [[[3, 1, 2, 2], [1, 4, 4, 5], [2, 4, 2, 2], [2, 4, 2, 2]], 3],
        ];
    }
}
