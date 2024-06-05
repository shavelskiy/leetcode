<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task322Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $coins
     */
    public function test322(array $coins, int $amount, int $result): void
    {
        $sut = new Task322();

        self::assertSame($sut->coinChange($coins, $amount), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 5], 11, 3],
            [[2], 3, -1],
            [[1], 0, 0],
        ];
    }
}
