<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group200\Task153;
use PHPUnit\Framework\TestCase;

final class Task153Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test153(array $nums, int $result): void
    {
        $sut = new Task153();

        self::assertSame($sut->findMin($nums), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 1], 1],
            [[3, 4, 5, 1, 2], 1],
            [[4, 5, 6, 7, 0, 1, 2], 0],
            [[11, 13, 15, 17], 11],
        ];
    }
}
