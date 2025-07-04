<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1318Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1318(int $a, int $b, int $c, int $result): void
    {
        $sut = new Task1318();

        self::assertSame($sut->minFlips($a, $b, $c), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [8, 3, 5, 3],
            [2, 6, 5, 3],
            [4, 2, 7, 1],
            [1, 2, 3, 0],
        ];
    }
}
