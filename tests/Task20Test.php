<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task20;
use PHPUnit\Framework\TestCase;

final class Task20Test extends TestCase
{
    public function test20(): void
    {
        $sut = new Task20();

        self::assertSame($sut->isValid('()'), true);
        self::assertSame($sut->isValid('()[]{}'), true);
        self::assertSame($sut->isValid('(])'), false);
    }
}
