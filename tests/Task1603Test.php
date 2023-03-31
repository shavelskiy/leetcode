<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1603;
use PHPUnit\Framework\TestCase;

final class Task1603Test extends TestCase
{
    public function test1603(): void
    {
        $sut = new Task1603(1, 1, 0);

        self::assertSame($sut->addCar(1), true);
        self::assertSame($sut->addCar(2), true);
        self::assertSame($sut->addCar(3), false);
        self::assertSame($sut->addCar(1), false);
    }
}
