<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1020;
use PHPUnit\Framework\TestCase;

final class Task1020Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1020(array $grid, int $result): void
    {
        $sut = new Task1020();

        self::assertSame($sut->numEnclaves($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[0, 0, 0, 0], [1, 0, 1, 0], [0, 1, 1, 0], [0, 0, 0, 0]], 3],
            [[[0, 1, 1, 0], [0, 0, 1, 0], [0, 0, 1, 0], [0, 0, 0, 0]], 0],
        ];
    }
}
