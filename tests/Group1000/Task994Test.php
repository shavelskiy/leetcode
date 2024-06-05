<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

use App\Tasks\Group1000\Task994;
use PHPUnit\Framework\TestCase;

final class Task994Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test994(array $grid, int $result): void
    {
        $sut = new Task994();

        self::assertSame($sut->orangesRotting($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [
                    [2, 0, 1, 1, 1, 1, 1, 1, 1, 1],
                    [1, 0, 1, 0, 0, 0, 0, 0, 0, 1],
                    [1, 0, 1, 0, 1, 1, 1, 1, 0, 1],
                    [1, 0, 1, 0, 1, 0, 0, 1, 0, 1],
                    [1, 0, 1, 0, 1, 0, 0, 1, 0, 1],
                    [1, 0, 1, 0, 1, 1, 0, 1, 0, 1],
                    [1, 0, 1, 0, 0, 0, 0, 1, 0, 1],
                    [1, 0, 1, 1, 1, 1, 1, 1, 0, 1],
                    [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                ],
                58,
            ],
            [[[1, 2]], 1],
            [[[2, 1, 1], [1, 1, 0], [0, 1, 1]], 4],
            [[[2, 1, 1], [0, 1, 1], [1, 0, 1]], -1],
        ];
    }
}
