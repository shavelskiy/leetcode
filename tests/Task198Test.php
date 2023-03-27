<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task198;
use PHPUnit\Framework\TestCase;

final class Task198Test extends TestCase
{
    public function test198(): void
    {
        $sut = new Task198();

        self::assertSame($sut->rob([2, 1, 1, 2]), 4);
        self::assertSame($sut->rob([1, 2, 3, 1]), 4);
        self::assertSame($sut->rob([2, 7, 9, 3, 1]), 12);
    }
}
