<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2900Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2900(int $a, int $result): void
    {
        $sut = new Task2900();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
