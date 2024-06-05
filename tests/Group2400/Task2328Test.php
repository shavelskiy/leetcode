<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2328Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2328(int $a, int $result): void
    {
        $sut = new Task2328();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
