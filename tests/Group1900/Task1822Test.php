<?php

declare(strict_types=1);

namespace App\Tasks\Group1900;

use PHPUnit\Framework\TestCase;

final class Task1822Test extends TestCase
{
    public function test1822(): void
    {
        $sut = new Task1822();

        self::assertSame($sut->arraySign([-1, -2, -3, -4, 3, 2, 1]), 1);
        self::assertSame($sut->arraySign([1, 5, 0, 2, -3]), 0);
        self::assertSame($sut->arraySign([-1, 1, -1, 1, -1]), -1);
    }
}
