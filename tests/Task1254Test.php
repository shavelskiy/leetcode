<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1300\Task1254;
use PHPUnit\Framework\TestCase;

final class Task1254Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1254(array $grid, int $result): void
    {
        $sut = new Task1254();

        self::assertSame($sut->closedIsland($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 1, 1, 1, 1, 1, 1, 0], [1, 0, 0, 0, 0, 1, 1, 0], [1, 0, 1, 0, 1, 1, 1, 0], [1, 0, 0, 0, 0, 1, 0, 1], [1, 1, 1, 1, 1, 1, 1, 0]], 2],
            [[[0, 0, 1, 0, 0], [0, 1, 0, 1, 0], [0, 1, 1, 1, 0]], 1],
        ];
    }
}
