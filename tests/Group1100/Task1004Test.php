<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1004Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test1004(array $nums, int $k, int $result): void
    {
        $sut = new Task1004();

        self::assertSame($sut->longestOnes($nums, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[0], 1, 1],
            [[1, 0, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 1], 8, 25],
            [[0, 0, 0, 0], 0, 0],
            [[0, 0, 1, 1, 1, 0, 0], 0, 3],
            [[1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0], 2, 6],
            [[0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1], 3, 10],
        ];
    }
}
