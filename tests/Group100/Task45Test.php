<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task45Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test45(array $nums, int $result): void
    {
        $sut = new Task45();

        self::assertSame($sut->jump($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 3, 1, 1, 4], 2],
            [[2, 3, 0, 1, 4], 2],
        ];
    }
}
