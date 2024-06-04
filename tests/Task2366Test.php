<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task2366;
use PHPUnit\Framework\TestCase;

final class Task2366Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2366(array $nums, int $result): void
    {
        $sut = new Task2366();

        self::assertSame($sut->minimumReplacement($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[10, 13, 6], 4],
            [[12, 9, 7, 6, 17, 19, 21], 6],
            [[3, 9, 3], 2],
            [[1, 2, 3, 4, 5], 0],
        ];
    }
}
