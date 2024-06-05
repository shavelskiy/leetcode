<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use App\Tasks\Group200\Task200;
use PHPUnit\Framework\TestCase;

final class Task200Test extends TestCase
{
    public function test200(): void
    {
        $sut = new Task200();

        $data = [
            ['1', '0', '1', '1', '1'],
            ['1', '0', '1', '0', '1'],
            ['1', '1', '1', '0', '1'],
        ];

        self::assertSame($sut->numIslands($data), 1);

        $data = [
            ['1', '1', '1', '1', '0'],
            ['1', '1', '0', '1', '0'],
            ['1', '1', '0', '0', '0'],
            ['0', '0', '0', '0', '0'],
        ];

        self::assertSame($sut->numIslands($data), 1);

        $data = [
            ['1', '1', '0', '0', '0'],
            ['1', '1', '0', '0', '0'],
            ['0', '0', '1', '0', '0'],
            ['0', '0', '0', '1', '1'],
        ];

        self::assertSame($sut->numIslands($data), 3);
    }
}
