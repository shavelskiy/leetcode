<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1670Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1670(int $a, int $result): void
    {
        $sut = new Task1670();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
