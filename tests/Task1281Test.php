<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1281;
use PHPUnit\Framework\TestCase;

final class Task1281Test extends TestCase
{
    public function test1281(): void
    {
        $sut = new Task1281();

        self::assertSame($sut->subtractProductAndSum(234), 15);
        self::assertSame($sut->subtractProductAndSum(4421), 21);
    }
}
