<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task238Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     * @param int[] $result
     */
    public function test238(array $nums, array $result): void
    {
        $sut = new Task238();

        self::assertSame($sut->productExceptSelf($nums, $result), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3, 4], [24, 12, 8, 6]],
            [[-1, 1, 0, -3, 3], [0, 0, 9, 0, 0]],
        ];
    }
}
