<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2462Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2462(array $costs, int $k, int $candidates, int $result): void
    {
        $sut = new Task2462();

        self::assertSame($sut->totalCost($costs, $k, $candidates), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[28, 35, 21, 13, 21, 72, 35, 52, 74, 92, 25, 65, 77, 1, 73, 32, 43, 68, 8, 100, 84, 80, 14, 88, 42, 53, 98, 69, 64, 40, 60, 23, 99, 83, 5, 21, 76, 34], 32, 12, 1407],
            [[55, 93], 1, 1, 55],
            [[17, 12, 10, 2, 7, 2, 11, 20, 8], 3, 4, 11],
            [[1, 2, 4, 1], 3, 3, 4],
        ];
    }
}
