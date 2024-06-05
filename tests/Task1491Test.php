<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1500\Task1491;
use PHPUnit\Framework\TestCase;

final class Task1491Test extends TestCase
{
    public function test1491(): void
    {
        $sut = new Task1491();

        self::assertSame($sut->average([4000, 3000, 1000, 2000]), 2500.0);
        self::assertSame($sut->average([1000, 2000, 3000]), 2000.0);
    }
}
