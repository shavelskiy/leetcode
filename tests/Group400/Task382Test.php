<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task382Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test382(int $a, int $result): void
    {
        $sut = new Task382();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
