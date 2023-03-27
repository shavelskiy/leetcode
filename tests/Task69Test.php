<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task69;
use PHPUnit\Framework\TestCase;

final class Task69Test extends TestCase
{
    public function test69(): void
    {
        $sut = new Task69();

        self::assertSame($sut->mySqrt(4), 2);
        self::assertSame($sut->mySqrt(8), 2);
    }
}
