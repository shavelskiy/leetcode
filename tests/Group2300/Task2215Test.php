<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2215Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[]        $nums1
     * @param int[]        $nums2
     * @param array<int[]> $result
     */
    public function test2215(array $nums1, array $nums2, array $result): void
    {
        $sut = new Task2215();

        self::assertSame($sut->findDifference($nums1, $nums2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3], [2, 4, 6], [[1, 3], [4, 6]]],
            [[1, 2, 3, 3], [1, 1, 2, 2], [[3], []]],
        ];
    }
}
