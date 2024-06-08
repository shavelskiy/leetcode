<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task643Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test643(array $nums, int $k, float $result): void
    {
        $sut = new Task643();

        self::assertSame($sut->findMaxAverage($nums, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[9, 7, 3, 5, 6, 2, 0, 8, 1, 9], 6, 5.333333333333333],
            [[1, 12, -5, -6, 50, 3], 4, 12.75],
            [[5], 1, 5.0],
        ];
    }
}
