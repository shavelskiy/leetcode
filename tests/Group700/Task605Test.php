<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task605Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $flowerbed
     */
    public function test605(array $flowerbed, int $n, bool $result): void
    {
        $sut = new Task605();

        self::assertSame($sut->canPlaceFlowers($flowerbed, $n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 0, 0, 0, 1], 1, true],
            [[1, 0, 0, 0, 1], 2, false],
        ];
    }
}
