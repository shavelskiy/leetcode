<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task202;
use PHPUnit\Framework\TestCase;

final class Task202Test extends TestCase
{
    public function test202(): void
    {
        $sut = new Task202();

        self::assertSame($sut->isHappy(19), true);
        self::assertSame($sut->isHappy(2), false);
    }
}
