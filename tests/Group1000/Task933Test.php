<?php

declare(strict_types=1);

namespace App\Tasks\Group1000;

use PHPUnit\Framework\TestCase;

final class Task933Test extends TestCase
{
    public function test933(): void
    {
        $sut = new Task933();

        self::assertSame($sut->ping(1), 1);
        self::assertSame($sut->ping(100), 2);
        self::assertSame($sut->ping(3001), 3);
        self::assertSame($sut->ping(3002), 3);
    }
}
