<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1700\Task1672;
use PHPUnit\Framework\TestCase;

final class Task1672Test extends TestCase
{
    public function test1672(): void
    {
        $sut = new Task1672();

        self::assertSame(
            $sut->maximumWealth([[1, 2, 3], [3, 2, 1]]),
            6,
        );

        self::assertSame(
            $sut->maximumWealth([[1, 5], [7, 3], [3, 5]]),
            10,
        );

        self::assertSame(
            $sut->maximumWealth([[2, 8, 7], [7, 1, 3], [1, 9, 5]]),
            17,
        );
    }
}
