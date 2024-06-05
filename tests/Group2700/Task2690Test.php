<?php

declare(strict_types=1);

namespace App\Tasks\Group2700;

use PHPUnit\Framework\TestCase;

final class Task2690Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2690(int $a, int $result): void
    {
        $sut = new Task2690();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
