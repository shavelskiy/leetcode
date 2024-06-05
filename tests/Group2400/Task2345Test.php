<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2345Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2345(int $a, int $result): void
    {
        $sut = new Task2345();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
