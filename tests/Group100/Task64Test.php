<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task64Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test64(int $a, int $result): void
    {
        $sut = new Task64();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
