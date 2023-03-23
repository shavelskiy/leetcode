<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task350;
use PHPUnit\Framework\TestCase;

final class Task350Test extends TestCase
{
    public function test350(): void
    {
        $sut = new Task350();

        self::assertSame($sut->intersect([1, 2, 2, 1], [2, 2]), [2, 2]);
        self::assertSame($sut->intersect([4, 9, 5], [9, 4, 9, 8, 4]), [4, 9]);
    }
}
