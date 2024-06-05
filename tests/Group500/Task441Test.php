<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task441Test extends TestCase
{
    public function test441(): void
    {
        $sut = new Task441();

        self::assertSame($sut->arrangeCoins(1804289383), 60070);
        self::assertSame($sut->arrangeCoins(5), 2);
        self::assertSame($sut->arrangeCoins(8), 3);
    }
}
