<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1968Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1968(int $a, int $result): void
    {
        $sut = new Task1968();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
