<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1679Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test1679(array $nums, int $k, int $result): void
    {
        $sut = new Task1679();

        self::assertSame($sut->maxOperations($nums, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3, 4], 5, 2],
            [[3, 1, 3, 4, 3], 6, 1],
        ];
    }
}
