<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1493Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test1493(array $nums, int $result): void
    {
        $sut = new Task1493();

        self::assertSame($sut->longestSubarray($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[0, 0, 0], 0],
            [[1, 1, 0, 0, 1, 1, 1, 0, 1], 4],
            [[1, 1, 0, 1], 3],
            [[0, 1, 1, 1, 0, 1, 1, 0, 1], 5],
            [[1, 1, 1], 2],
        ];
    }
}
