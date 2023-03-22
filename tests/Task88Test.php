<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task88;
use PHPUnit\Framework\TestCase;

final class Task88Test extends TestCase
{
    public function test88(): void
    {
        $sut = new Task88();

        $data = [1, 2, 3, 0, 0, 0];
        $sut->merge($data, 3, [2, 5, 6], 3);
        self::assertSame($data, [1, 2, 2, 3, 5, 6]);

        $data = [1];
        $sut->merge($data, 1, [], 0);
        self::assertSame($data, [1]);

        $data = [0];
        $sut->merge($data, 0, [1], 1);
        self::assertSame($data, [1]);
    }
}
