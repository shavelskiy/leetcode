<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1000\Task976;
use PHPUnit\Framework\TestCase;

final class Task976Test extends TestCase
{
    public function test976(): void
    {
        $sut = new Task976();

        self::assertSame($sut->largestPerimeter([2, 1, 2]), 5);
        self::assertSame($sut->largestPerimeter([1, 2, 1, 10]), 0);
    }
}
