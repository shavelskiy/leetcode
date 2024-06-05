<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task840Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test840(int $a, int $result): void
    {
        $sut = new Task840();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
