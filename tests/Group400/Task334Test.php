<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task334Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test334(array $nums, bool $result): void
    {
        $sut = new Task334();

        self::assertSame($sut->increasingTriplet($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 4, -2, -3], false],
            [[2, 1, 5], false],
            [[1, 2, 3, 4, 5], true],
            [[5, 4, 3, 2, 1], false],
            [[2, 1, 5, 0, 4, 6], true],
        ];
    }
}
