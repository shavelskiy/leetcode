<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2142Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2142(int $a, int $result): void
    {
        $sut = new Task2142();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
