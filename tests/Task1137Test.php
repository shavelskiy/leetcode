<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1200\Task1137;
use PHPUnit\Framework\TestCase;

final class Task1137Test extends TestCase
{
    public function test1137(): void
    {
        $sut = new Task1137();

        self::assertSame($sut->tribonacci(0), 0);
        self::assertSame($sut->tribonacci(4), 4);
        self::assertSame($sut->tribonacci(25), 1389537);
    }
}
