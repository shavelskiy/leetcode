<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task367Test extends TestCase
{
    public function test367(): void
    {
        $sut = new Task367();

        self::assertSame($sut->isPerfectSquare(16), true);
        self::assertSame($sut->isPerfectSquare(14), false);
    }
}
