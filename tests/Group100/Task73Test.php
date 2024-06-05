<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task73Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $matrix
     * @param array<int[]> $result
     */
    public function test54(array $matrix, array $result): void
    {
        $sut = new Task73();

        $sut->setZeroes($matrix);
        self::assertSame($matrix, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 1, 1], [1, 0, 1], [1, 1, 1]], [[1, 0, 1], [0, 0, 0], [1, 0, 1]]],
            [[[0, 1, 2, 0], [3, 4, 5, 2], [1, 3, 1, 5]], [[0, 0, 0, 0], [0, 4, 5, 0], [0, 3, 1, 0]]],
        ];
    }
}
