<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task33Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test33(array $nums, int $target, int $result): void
    {
        $sut = new Task33();

        self::assertSame($sut->search($nums, $target), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[4, 5, 6, 7, 0, 1, 2], 0, 4],
            [[4, 5, 6, 7, 0, 1, 2], 3, -1],
            [[1], 0, -1],
        ];
    }
}
