<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1149Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1149(int $a, int $result): void
    {
        $sut = new Task1149();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
