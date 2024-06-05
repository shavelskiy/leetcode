<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2575Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2575(int $a, int $result): void
    {
        $sut = new Task2575();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
