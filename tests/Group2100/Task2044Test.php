<?php

declare(strict_types=1);

namespace App\Tasks\Group2100;

use PHPUnit\Framework\TestCase;

final class Task2044Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2044(int $a, int $result): void
    {
        $sut = new Task2044();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
