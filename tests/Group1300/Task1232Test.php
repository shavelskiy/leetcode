<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1232Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1232(array $coordinates, bool $result): void
    {
        $sut = new Task1232();

        self::assertSame($sut->checkStraightLine($coordinates), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[2, 1], [4, 2], [6, 3]], true],
            [[[1, 2], [2, 3], [3, 5]], false],
            [[[1, 2], [2, 3], [3, 4], [4, 5], [5, 6], [6, 7]], true],
            [[[1, 1], [2, 2], [3, 4], [4, 5], [5, 6], [7, 7]], false],
        ];
    }
}
