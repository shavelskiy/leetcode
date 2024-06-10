<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1207Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $arr
     */
    public function test1207(array $arr, bool $result): void
    {
        $sut = new Task1207();

        self::assertSame($sut->uniqueOccurrences($arr), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 2, 1, 1, 3], true],
            [[1, 2], false],
            [[-3, 0, 1, -3, 1, 1, 1, -3, 10, 0], true],
            [[3, 5, -2, -3, -6, -6], false],
        ];
    }
}
