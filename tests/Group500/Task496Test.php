<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task496Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test496(array $nums1, array $nums2, array $result): void
    {
        $sut = new Task496();

        self::assertSame($sut->nextGreaterElement($nums1, $nums2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[4, 1, 2], [1, 3, 4, 2], [-1, 3, -1]],
            [[2, 4], [1, 2, 3, 4], [3, -1]],
        ];
    }
}
