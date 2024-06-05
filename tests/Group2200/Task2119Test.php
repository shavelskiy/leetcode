<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2119Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2119(int $a, int $result): void
    {
        $sut = new Task2119();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
