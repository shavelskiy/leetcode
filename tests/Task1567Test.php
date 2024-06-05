<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1600\Task1567;
use PHPUnit\Framework\TestCase;

final class Task1567Test extends TestCase
{
    public function test1567(): void
    {
        $sut = new Task1567();

        self::assertSame($sut->getMaxLen([1, -2, -3, 4]), 4);
        self::assertSame($sut->getMaxLen([0, 1, -2, -3, -4]), 3);
        self::assertSame($sut->getMaxLen([-1, -2, -3, 0, 1]), 2);
    }
}
