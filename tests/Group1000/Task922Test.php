<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

use PHPUnit\Framework\TestCase;

final class Task922Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test922(int $a, int $result): void
    {
        $sut = new Task922();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
