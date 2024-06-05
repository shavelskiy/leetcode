<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2204Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2204(int $a, int $result): void
    {
        $sut = new Task2204();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
