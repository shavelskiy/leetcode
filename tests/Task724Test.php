<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group800\Task724;
use PHPUnit\Framework\TestCase;

final class Task724Test extends TestCase
{
    public function test724(): void
    {
        $sut = new Task724();

        self::assertSame($sut->pivotIndex([1, 7, 3, 6, 5, 6]), 3);
        self::assertSame($sut->pivotIndex([1, 2, 3]), -1);
        self::assertSame($sut->pivotIndex([2, 1, -1]), 0);
    }
}
