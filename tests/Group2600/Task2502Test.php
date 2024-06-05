<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2502Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2502(int $a, int $result): void
    {
        $sut = new Task2502();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
