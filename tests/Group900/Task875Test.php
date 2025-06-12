<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task875Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test875(array $piles, int $h, int $result): void
    {
        $sut = new Task875();

        self::assertSame($sut->minEatingSpeed($piles, $h, $result), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[999], 10, 100],
            [[3, 6, 7, 11], 8, 4],
            [[30, 11, 23, 4, 20], 5, 30],
            [[30, 11, 23, 4, 20], 6, 23],
        ];
    }
}
