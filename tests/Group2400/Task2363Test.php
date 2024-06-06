<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2363Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2363(int $a, int $result): void
    {
        $sut = new Task2363();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}