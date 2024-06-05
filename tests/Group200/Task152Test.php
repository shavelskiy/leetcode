<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task152Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test152(array $nums, int $result): void
    {
        $sut = new Task152();

        self::assertSame($sut->maxProduct($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, -5, -2, -4, 3], 24],
            [[-3, -1, -1], 3],
            [[-2, 3, -4], 24],
            [[2, 3, -2, 4], 6],
            [[-2, 0, -1], 0],
        ];
    }
}
