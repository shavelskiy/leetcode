<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1000\Task977;
use PHPUnit\Framework\TestCase;

final class Task977Test extends TestCase
{
    public function test977(): void
    {
        $sut = new Task977();

        self::assertSame($sut->sortedSquares([-1]), [1]);
        self::assertSame($sut->sortedSquares([-4, -1, 0, 3, 10]), [0, 1, 9, 16, 100]);
        self::assertSame($sut->sortedSquares([-7, -3, 2, 3, 11]), [4, 9, 9, 49, 121]);
        self::assertSame($sut->sortedSquares([-7, -4, -3, -2, -1, 3, 11]), [1, 4, 9, 9, 16, 49, 121]);
    }
}
