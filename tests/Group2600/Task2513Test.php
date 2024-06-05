<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2513Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2513(int $a, int $result): void
    {
        $sut = new Task2513();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
