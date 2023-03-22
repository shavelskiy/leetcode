<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task2561;
use PHPUnit\Framework\TestCase;

final class Task2561Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $basket1
     * @param int[] $basket2
     */
    public function test2561(array $basket1, array $basket2, int $result): void
    {
        $sut = new Task2561();

        self::assertSame($sut->minCost($basket1, $basket2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[84, 80, 43, 8, 80, 88, 43, 14, 100, 88], [32, 32, 42, 68, 68, 100, 42, 84, 14, 8], 48],
            [[4, 4, 4, 4, 3], [5, 5, 5, 5, 3], 8],
            [[4, 2, 2, 2], [1, 4, 1, 2], 1],
            [[2, 3, 4, 1], [3, 2, 5, 1], -1],
        ];
    }
}
