<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2110Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2110(int $a, int $result): void
    {
        $sut = new Task2110();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
