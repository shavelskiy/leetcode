<?php

declare(strict_types=1);

namespace App\Tasks\Group1900;

use PHPUnit\Framework\TestCase;

final class Task1883Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1883(int $a, int $result): void
    {
        $sut = new Task1883();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
