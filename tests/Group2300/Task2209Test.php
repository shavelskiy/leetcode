<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2209Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2209(int $a, int $result): void
    {
        $sut = new Task2209();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
