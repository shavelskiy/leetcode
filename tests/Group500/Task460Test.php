<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task460Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test460(int $a, int $result): void
    {
        $sut = new Task460();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
