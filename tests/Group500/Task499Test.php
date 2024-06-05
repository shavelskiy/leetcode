<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task499Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test499(int $a, int $result): void
    {
        $sut = new Task499();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
