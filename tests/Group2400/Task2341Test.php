<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2341Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2341(int $a, int $result): void
    {
        $sut = new Task2341();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
