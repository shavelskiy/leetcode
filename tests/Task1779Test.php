<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1800\Task1779;
use PHPUnit\Framework\TestCase;

final class Task1779Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1779(array $pionts, int $x, int $y, int $result): void
    {
        $sut = new Task1779();

        self::assertSame($sut->nearestValidPoint($x, $y, $pionts), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 2], [3, 1], [2, 4], [2, 3], [4, 4]], 3, 4, 2],
            [[[3, 4]], 3, 4, 0],
            [[[2, 3]], 3, 4, -1],
        ];
    }
}
