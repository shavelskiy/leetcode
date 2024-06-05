<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2233Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2233(int $a, int $result): void
    {
        $sut = new Task2233();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
