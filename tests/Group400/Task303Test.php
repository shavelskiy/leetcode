<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task303Test extends TestCase
{
    public function test303(): void
    {
        $sut = new Task303([-2, 0, 3, -5, 2, -1]);

        self::assertSame($sut->sumRange(0, 2), 1);
        self::assertSame($sut->sumRange(2, 5), -1);
        self::assertSame($sut->sumRange(0, 5), -3);
    }
}
