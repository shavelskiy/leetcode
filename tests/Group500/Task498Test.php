<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task498Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test498(int $a, int $result): void
    {
        $sut = new Task498();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
