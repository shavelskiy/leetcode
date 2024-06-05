<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task885Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test885(int $a, int $result): void
    {
        $sut = new Task885();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
