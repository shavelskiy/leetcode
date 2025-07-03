<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task338Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test338(int $a, array $result): void
    {
        $sut = new Task338();

        self::assertSame($sut->countBits($a), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [2, [0, 1, 1]],
            [5, [0, 1, 1, 2, 1, 2]],
        ];
    }
}
