<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2116Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2116(int $a, int $result): void
    {
        $sut = new Task2116();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
