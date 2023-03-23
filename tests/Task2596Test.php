<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task2596;
use PHPUnit\Framework\TestCase;

final class Task2596Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $grid
     */
    public function test2596(array $grid, bool $result): void
    {
        $sut = new Task2596();

        self::assertSame($sut->checkValidGrid($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[0, 11, 16, 5, 20], [17, 4, 19, 10, 15], [12, 1, 8, 21, 6], [3, 18, 23, 14, 9], [24, 13, 2, 7, 22]], true],
            [[[0, 3, 6], [5, 8, 1], [2, 7, 4]], false],
        ];
    }
}
