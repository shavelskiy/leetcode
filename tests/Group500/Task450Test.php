<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task450Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test450(int $a, int $result): void
    {
        $sut = new Task450();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
