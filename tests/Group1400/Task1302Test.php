<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1302Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1302(int $a, int $result): void
    {
        $sut = new Task1302();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
