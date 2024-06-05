<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task733Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test733(array $image, int $sr, int $sc, int $color, array $result): void
    {
        $sut = new Task733();

        self::assertSame(
            $sut->floodFill($image, $sr, $sc, $color),
            $result,
        );
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 1, 1], [1, 1, 0], [1, 0, 1]], 1, 1, 2, [[2, 2, 2], [2, 2, 0], [2, 0, 1]]],
            [[[0, 0, 0], [0, 0, 0]], 0, 0, 0, [[0, 0, 0], [0, 0, 0]]],
            [[[0, 0, 0], [0, 0, 0]], 1, 0, 2, [[2, 2, 2], [2, 2, 2]]],
        ];
    }
}
