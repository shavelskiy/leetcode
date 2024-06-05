<?php

declare(strict_types=1);

namespace App\Tasks\Group2100;

use PHPUnit\Framework\TestCase;

final class Task2080Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2080(int $a, int $result): void
    {
        $sut = new Task2080();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
