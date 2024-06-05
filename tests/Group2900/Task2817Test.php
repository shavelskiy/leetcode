<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2817Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2817(int $a, int $result): void
    {
        $sut = new Task2817();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
