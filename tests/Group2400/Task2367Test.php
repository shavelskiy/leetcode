<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2367Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2367(int $a, int $result): void
    {
        $sut = new Task2367();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}