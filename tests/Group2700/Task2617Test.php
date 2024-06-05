<?php

declare(strict_types=1);

namespace App\Tasks\Group2700;

use PHPUnit\Framework\TestCase;

final class Task2617Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2617(int $a, int $result): void
    {
        $sut = new Task2617();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
