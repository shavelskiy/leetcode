<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2221Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2221(int $a, int $result): void
    {
        $sut = new Task2221();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
