<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task232;
use PHPUnit\Framework\TestCase;

final class Task232Test extends TestCase
{
    public function test232(): void
    {
        $sut = new Task232();

        $sut->push(1);
        $sut->push(2);

        self::assertSame($sut->peek(), 1);
        self::assertSame($sut->pop(), 1);
        self::assertSame($sut->peek(), 2);
        self::assertSame($sut->empty(), false);
    }
}
