<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2346Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2346(int $a, int $result): void
    {
        $sut = new Task2346();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
