<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task896;
use PHPUnit\Framework\TestCase;

final class Task896Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test896(array $nums, bool $result): void
    {
        $sut = new Task896();

        self::assertSame($sut->isMonotonic($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 2, 3], true],
            [[6, 5, 4, 4], true],
            [[1, 3, 2], false],
        ];
    }
}
