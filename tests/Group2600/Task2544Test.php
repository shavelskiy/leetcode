<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2544Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2544(int $a, int $result): void
    {
        $sut = new Task2544();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
