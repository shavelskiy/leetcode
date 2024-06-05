<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1624Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1624(int $a, int $result): void
    {
        $sut = new Task1624();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
