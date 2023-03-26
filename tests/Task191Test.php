<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task191;
use PHPUnit\Framework\TestCase;

final class Task191Test extends TestCase
{
    public function test191(): void
    {
        $sut = new Task191();

        self::assertSame($sut->hammingWeight(11), 3);
        self::assertSame($sut->hammingWeight(128), 1);
        self::assertSame($sut->hammingWeight(4294967293), 31);
    }
}
