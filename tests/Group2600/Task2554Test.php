<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2554Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2554(int $a, int $result): void
    {
        $sut = new Task2554();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
