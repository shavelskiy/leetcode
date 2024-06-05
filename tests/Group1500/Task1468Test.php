<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1468Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1468(int $a, int $result): void
    {
        $sut = new Task1468();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
