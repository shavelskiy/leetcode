<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task225Test extends TestCase
{
    public function test225(): void
    {
        $sut = new Task225();

        $sut->push(1);
        $sut->push(2);

        self::assertSame($sut->top(), 2);
        self::assertSame($sut->pop(), 2);
        self::assertSame($sut->empty(), false);
    }
}
