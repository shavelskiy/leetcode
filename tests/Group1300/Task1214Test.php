<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1214Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1214(int $a, int $result): void
    {
        $sut = new Task1214();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
