<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task343Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test343(int $a, int $result): void
    {
        $sut = new Task343();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
