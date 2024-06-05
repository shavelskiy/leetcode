<?php

declare(strict_types=1);

namespace App\Tasks\Group3000;

use PHPUnit\Framework\TestCase;

final class Task2909Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2909(int $a, int $result): void
    {
        $sut = new Task2909();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
