<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task616Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test616(int $a, int $result): void
    {
        $sut = new Task616();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
