<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task509Test extends TestCase
{
    public function test509(): void
    {
        $sut = new Task509();

        self::assertSame($sut->fib(2), 1);
        self::assertSame($sut->fib(3), 2);
        self::assertSame($sut->fib(4), 3);
    }
}
