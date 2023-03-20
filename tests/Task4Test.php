<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task4;
use PHPUnit\Framework\TestCase;

final class Task4Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test4(array $nums1, array $nums2, float $result): void
    {
        $sut = new Task4();

        self::assertSame($sut->findMedianSortedArrays($nums1, $nums2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 3], [2], 2.0],
            [[1, 2], [3, 4], 2.5],
            [[[0, 0, 0, 0, 0]], [-1, 0, 0, 0, 0, 0, 1], 0.0],
        ];
    }
}
