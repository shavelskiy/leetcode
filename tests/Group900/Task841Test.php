<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task841Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $rooms
     */
    public function test841(array $rooms, bool $result): void
    {
        $sut = new Task841();

        self::assertSame($sut->canVisitAllRooms($rooms), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1], [2], [3], []], true],
            [[[1, 3], [3, 0, 1], [2], [0]], false],
        ];
    }
}
