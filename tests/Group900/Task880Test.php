<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task880Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test880(int $a, int $result): void
    {
        $sut = new Task880();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
