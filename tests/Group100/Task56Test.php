<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task56Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test56(array $intervals, array $result): void
    {
        $sut = new Task56();

        self::assertSame($sut->merge($intervals), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 3], [2, 6], [8, 10], [15, 18]], [[1, 6], [8, 10], [15, 18]]],
            [[[1, 4], [4, 5]], [[1, 5]]],
        ];
    }
}
