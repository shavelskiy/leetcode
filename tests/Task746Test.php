<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group800\Task746;
use PHPUnit\Framework\TestCase;

final class Task746Test extends TestCase
{
    public function test746(): void
    {
        $sut = new Task746();

        self::assertSame($sut->minCostClimbingStairs([10, 15, 20]), 15);
        self::assertSame($sut->minCostClimbingStairs([1, 100, 1, 1, 1, 100, 1, 1, 100, 1]), 6);
    }
}
