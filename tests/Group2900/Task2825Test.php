<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2825Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2825(int $a, int $result): void
    {
        $sut = new Task2825();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
