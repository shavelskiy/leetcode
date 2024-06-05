<?php

declare(strict_types=1);

namespace App\Tasks;

use App\Tasks\Group100\Task53;
use PHPUnit\Framework\TestCase;

final class Task53Test extends TestCase
{
    public function test53(): void
    {
        $sut = new Task53();

        self::assertSame($sut->maxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]), 6);
        self::assertSame($sut->maxSubArray([1]), 1);
        self::assertSame($sut->maxSubArray([5, 4, -1, 7, 8]), 23);
    }
}
