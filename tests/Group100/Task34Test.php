<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task34Test extends TestCase
{
    public function test34(): void
    {
        $sut = new Task34();

        self::assertSame($sut->searchRange([5, 7, 7, 8, 8, 10], 8), [3, 4]);
        self::assertSame($sut->searchRange([5, 7, 7, 8, 8, 10], 6), [-1, -1]);
        self::assertSame($sut->searchRange([], 0), [-1, -1]);
    }
}
