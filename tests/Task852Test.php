<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group900\Task852;
use PHPUnit\Framework\TestCase;

final class Task852Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test852(array $nums, int $result): void
    {
        $sut = new Task852();

        self::assertSame($sut->peakIndexInMountainArray($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[0, 1, 0], 1],
            [[0, 2, 1, 0], 1],
            [[0, 10, 5, 2], 1],
        ];
    }
}
