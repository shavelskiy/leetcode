<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task121;
use PHPUnit\Framework\TestCase;

final class Task121Test extends TestCase
{
    public function test121(): void
    {
        $sut = new Task121();

        self::assertSame($sut->maxProfit([7, 1, 5, 3, 6, 4]), 5);
        self::assertSame($sut->maxProfit([7, 6, 4, 3, 1]), 0);
    }
}
