<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task70;
use PHPUnit\Framework\TestCase;

final class Task70Test extends TestCase
{
    public function test70(): void
    {
        $sut = new Task70();

        self::assertSame($sut->climbStairs(2), 2);
        self::assertSame($sut->climbStairs(3), 3);
    }
}
