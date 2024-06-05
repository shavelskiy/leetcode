<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task802Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test802(int $a, int $result): void
    {
        $sut = new Task802();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
