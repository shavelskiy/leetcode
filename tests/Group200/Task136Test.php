<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task136Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test136(array $nums, int $result): void
    {
        $sut = new Task136();

        self::assertSame($sut->singleNumber($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 2, 1], 1],
            [[4, 1, 2, 1, 2], 4],
            [[1], 1],
        ];
    }
}
