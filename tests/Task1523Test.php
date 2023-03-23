<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1523;
use PHPUnit\Framework\TestCase;

final class Task1523Test extends TestCase
{
    public function test1523(): void
    {
        $sut = new Task1523();

        self::assertSame($sut->countOdds(3, 7, 3), 3);
        self::assertSame($sut->countOdds(8, 10), 1);
    }
}
