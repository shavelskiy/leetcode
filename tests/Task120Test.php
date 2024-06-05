<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group200\Task120;
use PHPUnit\Framework\TestCase;

final class Task120Test extends TestCase
{
    public function test120(): void
    {
        $sut = new Task120();

        self::assertSame($sut->minimumTotal([[2], [3, 4], [6, 5, 7], [4, 1, 8, 3]]), 11);
        self::assertSame($sut->minimumTotal([[-10]]), -10);
    }
}
