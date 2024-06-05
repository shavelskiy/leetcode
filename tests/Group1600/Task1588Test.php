<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use App\Tasks\Group1600\Task1588;
use PHPUnit\Framework\TestCase;

final class Task1588Test extends TestCase
{
    public function test1588(): void
    {
        $sut = new Task1588();

        self::assertSame($sut->sumOddLengthSubarrays([1, 4, 2, 5, 3]), 58);
        self::assertSame($sut->sumOddLengthSubarrays([1, 2]), 3);
    }
}
