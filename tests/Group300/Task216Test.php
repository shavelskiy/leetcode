<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task216Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test216(int $k, int $n, array $result): void
    {
        $sut = new Task216();

        self::assertSame($sut->combinationSum3($k, $n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [2, 18, []],
            [3, 7, [[1, 2, 4]]],
            [3, 9, [[1, 2, 6], [1, 3, 5], [2, 3, 4]]],
            [4, 1, []],
        ];
    }
}
