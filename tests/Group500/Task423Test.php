<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task423Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test423(int $a, int $result): void
    {
        $sut = new Task423();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
