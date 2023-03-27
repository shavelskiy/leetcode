<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task213;
use PHPUnit\Framework\TestCase;

final class Task213Test extends TestCase
{
    public function test213(): void
    {
        $sut = new Task213();

        self::assertSame($sut->rob([2, 3, 2]), 3);
        self::assertSame($sut->rob([1, 2, 3, 1]), 4);
        self::assertSame($sut->rob([1, 2, 3]), 3);
    }
}
