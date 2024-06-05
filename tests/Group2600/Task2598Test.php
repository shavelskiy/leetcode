<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use App\Tasks\Group2600\Task2598;
use PHPUnit\Framework\TestCase;

final class Task2598Test extends TestCase
{
    public function test2598(): void
    {
        $sut = new Task2598();

        self::assertSame($sut->evenOddBit(17), [2, 0]);
        self::assertSame($sut->evenOddBit(2), [0, 1]);
    }
}
