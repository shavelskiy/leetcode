<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2585Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2585(int $a, int $result): void
    {
        $sut = new Task2585();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
