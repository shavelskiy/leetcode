<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2182Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2182(int $a, int $result): void
    {
        $sut = new Task2182();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
