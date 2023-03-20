<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task11;
use PHPUnit\Framework\TestCase;

final class Task11Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test11(array $height, int $result): void
    {
        $sut = new Task11();

        self::assertSame($sut->maxArea($height), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-11.php';

        return [
            [[1, 8, 6, 2, 5, 4, 8, 3, 7], 49],
            [[1, 1], 1],
            [$data, 97658256],
        ];
    }
}
