<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task52Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test52(int $a, int $result): void
    {
        $sut = new Task52();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
