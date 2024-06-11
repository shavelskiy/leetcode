<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task547Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $isConnected
     */
    public function test547(array $isConnected, int $result): void
    {
        $sut = new Task547();

        self::assertSame($sut->findCircleNum($isConnected), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 0, 0, 1], [0, 1, 1, 0], [0, 1, 1, 1], [1, 0, 1, 1]], 1],
            [[[1, 1, 0], [1, 1, 0], [0, 0, 1]], 2],
            [[[1, 0, 0], [0, 1, 0], [0, 0, 1]], 3],
        ];
    }
}
