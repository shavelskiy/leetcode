<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1502Test extends TestCase
{
    public function test1502(): void
    {
        $sut = new Task1502();

        self::assertSame($sut->canMakeArithmeticProgression([3, 5, 1]), true);
        self::assertSame($sut->canMakeArithmeticProgression([1, 2, 4]), false);
    }
}
