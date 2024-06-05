<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1925Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1925(int $a, int $result): void
    {
        $sut = new Task1925();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
