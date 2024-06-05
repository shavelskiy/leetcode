<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use App\Tasks\Group800\Task704;
use PHPUnit\Framework\TestCase;

final class Task704Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test704(array $nums, int $target, int $result): void
    {
        $sut = new Task704();

        self::assertSame($sut->search($nums, $target), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[-1, 0, 3, 5, 9, 12], 9, 4],
            [[-1, 0, 3, 5, 9, 12], 2, -1],
        ];
    }
}
