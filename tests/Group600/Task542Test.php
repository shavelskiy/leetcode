<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task542Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test542(array $mat, array $result): void
    {
        $sut = new Task542();

        self::assertSame($sut->updateMatrix($mat), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [[0, 1, 0, 1, 1], [1, 1, 0, 0, 1], [0, 0, 0, 1, 0], [1, 0, 1, 1, 1], [1, 0, 0, 0, 1]],
                [[0, 1, 0, 1, 2], [1, 1, 0, 0, 1], [0, 0, 0, 1, 0], [1, 0, 1, 1, 1], [1, 0, 0, 0, 1]],
            ],
            [[[0], [0], [0], [0], [0]], [[0], [0], [0], [0], [0]]],
            [[[0, 0, 0], [0, 1, 0], [0, 0, 0]], [[0, 0, 0], [0, 1, 0], [0, 0, 0]]],
            [[[0, 0, 0], [0, 1, 0], [1, 1, 1]], [[0, 0, 0], [0, 1, 0], [1, 2, 1]]],
        ];
    }
}
