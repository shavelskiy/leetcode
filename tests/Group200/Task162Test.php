<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task162Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test162(array $nums, int $result): void
    {
        $sut = new Task162();

        self::assertSame($sut->findPeakElement($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[1, 2, 3, 1], 2],
            [[1, 2, 1, 3, 5, 6, 4], 5],
        ];
    }
}
