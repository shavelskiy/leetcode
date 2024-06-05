<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1046Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1046(array $stones, int $result): void
    {
        $sut = new Task1046();

        self::assertSame($sut->lastStoneWeight($stones), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 2], 0],
            [[7, 6, 7, 6, 9], 3],
            [[2, 7, 4, 1, 8, 1], 1],
            [[1], 1],
        ];
    }
}
