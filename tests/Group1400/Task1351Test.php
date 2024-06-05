<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1351Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1351(array $grid, int $result): void
    {
        $sut = new Task1351();

        self::assertSame($sut->countNegatives($grid), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [
                    [4, 3, 2, -1],
                    [3, 2, 1, -1],
                    [1, 1, -1, -2],
                    [-1, -1, -2, -3],
                ], 8,
            ],
            [[[3, 2], [1, 0]], 0],
        ];
    }
}
