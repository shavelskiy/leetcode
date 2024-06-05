<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task87Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test87(int $a, int $result): void
    {
        $sut = new Task87();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
