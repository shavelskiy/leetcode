<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1546Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1546(int $a, int $result): void
    {
        $sut = new Task1546();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
