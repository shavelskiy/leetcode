<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task91Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test91(int $a, int $result): void
    {
        $sut = new Task91();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
