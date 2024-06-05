<?php

declare(strict_types=1);

namespace App\Tasks\Group2100;

use PHPUnit\Framework\TestCase;

final class Task2022Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2022(int $a, int $result): void
    {
        $sut = new Task2022();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
