<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2463Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2463(int $a, int $result): void
    {
        $sut = new Task2463();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
