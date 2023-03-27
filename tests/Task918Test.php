<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task918;
use PHPUnit\Framework\TestCase;

final class Task918Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test918(array $nums, int $result): void
    {
        $sut = new Task918();

        self::assertSame($sut->maxSubarraySumCircular($nums), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-918.php';

        return [
            [$data, 5201209],
            [[1, -2, 3, -2], 3],
            [[5, -3, 5], 10],
            [[-3, -2, -3], -2],
        ];
    }
}
