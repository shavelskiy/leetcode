<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1905;
use PHPUnit\Framework\TestCase;

final class Task1905Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1905(array $grid1, array $grid2, int $result): void
    {
        $sut = new Task1905();

        self::assertSame($sut->countSubIslands($grid1, $grid2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [[1, 1, 1, 1, 0, 0], [1, 1, 0, 1, 0, 0], [1, 0, 0, 1, 1, 1], [1, 1, 1, 0, 0, 1], [1, 1, 1, 1, 1, 0], [1, 0, 1, 0, 1, 0], [0, 1, 1, 1, 0, 1], [1, 0, 0, 0, 1, 1], [1, 0, 0, 0, 1, 0], [1, 1, 1, 1, 1, 0]],
                [[1, 1, 1, 1, 0, 1], [0, 0, 1, 0, 1, 0], [1, 1, 1, 1, 1, 1], [0, 1, 1, 1, 1, 1], [1, 1, 1, 0, 1, 0], [0, 1, 1, 1, 1, 1], [1, 1, 0, 1, 1, 1], [1, 0, 0, 1, 0, 1], [1, 1, 1, 1, 1, 1], [1, 0, 0, 1, 0, 0]],
                0,
            ],
            [
                [[1, 1, 1, 0, 0], [0, 1, 1, 1, 1], [0, 0, 0, 0, 0], [1, 0, 0, 0, 0], [1, 1, 0, 1, 1]],
                [[1, 1, 1, 0, 0], [0, 0, 1, 1, 1], [0, 1, 0, 0, 0], [1, 0, 1, 1, 0], [0, 1, 0, 1, 0]],
                3,
            ],
            [
                [[1, 0, 1, 0, 1], [1, 1, 1, 1, 1], [0, 0, 0, 0, 0], [1, 1, 1, 1, 1], [1, 0, 1, 0, 1]],
                [[0, 0, 0, 0, 0], [1, 1, 1, 1, 1], [0, 1, 0, 1, 0], [0, 1, 0, 1, 0], [1, 0, 0, 0, 1]],
                2,
            ],
        ];
    }
}
