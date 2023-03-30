<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task46;
use PHPUnit\Framework\TestCase;

final class Task46Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test46(array $nums, array $result): void
    {
        $sut = new Task46();

        self::assertSame($sut->permute($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3], [[1, 2, 3], [1, 3, 2], [2, 1, 3], [2, 3, 1], [3, 1, 2], [3, 2, 1]]],
            [[0, 1], [[0, 1], [1, 0]]],
            [[1], [[1]]],
        ];
    }
}
