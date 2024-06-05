<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2528Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2528(int $a, int $result): void
    {
        $sut = new Task2528();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
