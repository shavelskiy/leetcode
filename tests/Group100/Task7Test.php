<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Tasks\Group100\Task7;
use PHPUnit\Framework\TestCase;

final class Task7Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test7(int $x, int $result): void
    {
        $sut = new Task7();

        self::assertSame($sut->reverse($x), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [123, 321],
            [-123, -321],
            [120, 21],
            [123456789, 987654321],
        ];
    }
}
