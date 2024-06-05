<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1346Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1346(array $arr, bool $result): void
    {
        $sut = new Task1346();

        self::assertSame($sut->checkIfExist($arr), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[-10, 12, -20, -8, 15], true],
            [[10, 2, 5, 3], true],
            [[3, 1, 7, 11], false],
        ];
    }
}
