<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2336Test extends TestCase
{
    public function test2336(): void
    {
        $sut = new Task2336();

        $sut->addBack(2);

        self::assertSame($sut->popSmallest(), 1);
        self::assertSame($sut->popSmallest(), 2);
        self::assertSame($sut->popSmallest(), 3);

        $sut->addBack(1);

        self::assertSame($sut->popSmallest(), 1);
        self::assertSame($sut->popSmallest(), 4);
        self::assertSame($sut->popSmallest(), 5);
    }
}
