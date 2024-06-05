<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1472Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1472(int $a, int $result): void
    {
        $sut = new Task1472();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
