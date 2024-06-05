<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task440Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test440(int $a, int $result): void
    {
        $sut = new Task440();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
