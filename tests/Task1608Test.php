<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1700\Task1608;
use PHPUnit\Framework\TestCase;

final class Task1608Test extends TestCase
{
    public function test1608(): void
    {
        $sut = new Task1608();

        self::assertSame($sut->specialArray([3, 5]), 2);
        self::assertSame($sut->specialArray([0, 0]), -1);
        self::assertSame($sut->specialArray([0, 4, 3, 0, 4]), 3);
    }
}
