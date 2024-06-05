<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task54Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $matrix
     * @param int[]        $result
     */
    public function test54(array $matrix, array $result): void
    {
        $sut = new Task54();

        self::assertSame($sut->spiralOrder($matrix), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [
                    [1, 2, 3, 4, 5, 6],
                    [8, 9, 0, 1, 2, 7],
                    [7, 8, 9, 0, 3, 8],
                    [6, 7, 6, 5, 4, 9],
                    [5, 4, 3, 2, 1, 0],
                ],
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0],
            ],
            [[[1, 2, 3], [8, 9, 4], [7, 6, 5]], [1, 2, 3, 4, 5, 6, 7, 8, 9]],
            [[[1, 2, 3], [4, 5, 6], [7, 8, 9]], [1, 2, 3, 6, 9, 8, 7, 4, 5]],
            [[[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]], [1, 2, 3, 4, 8, 12, 11, 10, 9, 5, 6, 7]],
        ];
    }
}
