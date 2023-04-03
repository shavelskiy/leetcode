<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1337;
use PHPUnit\Framework\TestCase;

final class Task1337Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1337(array $mat, int $k, array $result): void
    {
        $sut = new Task1337();

        self::assertSame($sut->kWeakestRows($mat, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [
                [[1, 0], [0, 0], [1, 0]],
                2, [1, 0],
            ],
            [[
                [1, 1, 0, 0, 0],
                [1, 1, 1, 1, 0],
                [1, 0, 0, 0, 0],
                [1, 1, 0, 0, 0],
                [1, 1, 1, 1, 1],
            ], 3, [2, 0, 3]],
        ];
    }
}
