<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group400\Task347;
use PHPUnit\Framework\TestCase;

final class Task347Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test347(array $nums, int $k, array $result): void
    {
        $sut = new Task347();

        self::assertSame($sut->topKFrequent($nums, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[4, 1, -1, 2, -1, 2, 3], 2, [-1, 2]],
            [[5, 3, 1, 1, 1, 3, 73, 1], 1, [1]],
        ];
    }
}
