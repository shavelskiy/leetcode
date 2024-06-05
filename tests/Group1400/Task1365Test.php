<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1365Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1365(array $nums, array $result): void
    {
        $sut = new Task1365();

        self::assertSame($sut->smallerNumbersThanCurrent($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[8, 1, 2, 2, 3], [4, 0, 1, 1, 3]],
            [[6, 5, 4, 8], [2, 1, 0, 3]],
            [[7, 7, 7, 7], [0, 0, 0, 0]],
        ];
    }
}
