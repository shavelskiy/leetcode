<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2169Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2169(int $a, int $result): void
    {
        $sut = new Task2169();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
