<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task77Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test77(int $n, int $k, array $result): void
    {
        $sut = new Task77();

        self::assertSame($sut->combine($n, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [4, 2, [[1, 2], [1, 3], [1, 4], [2, 3], [2, 4], [3, 4]]],
            [1, 1, [[1]]],
        ];
    }
}
