<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2542Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2542(array $nums1, array $nums2, int $k, int $result): void
    {
        $sut = new Task2542();

        self::assertSame($sut->maxScore($nums1, $nums2, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 3, 3, 2], [2, 1, 3, 4], 3, 12],
            [[4, 2, 3, 1, 1], [7, 5, 10, 9, 6], 1, 30],
        ];
    }
}
