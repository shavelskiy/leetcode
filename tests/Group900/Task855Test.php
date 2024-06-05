<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task855Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test855(int $a, int $result): void
    {
        $sut = new Task855();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
