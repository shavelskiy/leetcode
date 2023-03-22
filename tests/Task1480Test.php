<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1480;
use PHPUnit\Framework\TestCase;

final class Task1480Test extends TestCase
{
    public function test1480(): void
    {
        $sut = new Task1480();

        self::assertSame($sut->runningSum([1, 2, 3, 4]), [1, 3, 6, 10]);
        self::assertSame($sut->runningSum([1, 1, 1, 1, 1]), [1, 2, 3, 4, 5]);
    }
}
