<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task479Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test479(int $a, int $result): void
    {
        $sut = new Task479();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
