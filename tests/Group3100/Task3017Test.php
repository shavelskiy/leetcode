<?php

declare(strict_types=1);

namespace App\Tasks\Group3100;

use PHPUnit\Framework\TestCase;

final class Task3017Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test3017(int $a, int $result): void
    {
        $sut = new Task3017();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}