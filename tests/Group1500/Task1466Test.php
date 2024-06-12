<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1466Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[] $connections
     */
    public function test1466(int $n, array $connections, int $result): void
    {
        $sut = new Task1466();

        self::assertSame($sut->minReorder($n, $connections), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [6, [[0, 1], [1, 3], [2, 3], [4, 0], [4, 5]], 3],
            [5, [[1, 0], [1, 2], [3, 2], [3, 4]], 2],
            [3, [[1, 0], [2, 0]], 0],
        ];
    }
}
