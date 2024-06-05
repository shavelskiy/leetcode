<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1382Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1382(int $a, int $result): void
    {
        $sut = new Task1382();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
