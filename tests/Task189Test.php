<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task189;
use PHPUnit\Framework\TestCase;

final class Task189Test extends TestCase
{
    public function test189(): void
    {
        $sut = new Task189();

        $data = [1, 2, 3, 4, 5, 6, 7];
        $sut->rotate($data, 3);
        self::assertSame($data, [5, 6, 7, 1, 2, 3, 4]);

        $data = [-1, -100, 3, 99];
        $sut->rotate($data, 2);
        self::assertSame($data, [3, 99, -1, -100]);
    }
}
