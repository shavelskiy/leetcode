<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2844Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2844(int $a, int $result): void
    {
        $sut = new Task2844();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}