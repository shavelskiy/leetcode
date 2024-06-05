<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1900\Task1855;
use PHPUnit\Framework\TestCase;

final class Task1855Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1855(array $nums1, array $nums2, int $result): void
    {
        $sut = new Task1855();

        self::assertSame($sut->maxDistance($nums1, $nums2), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-1855.php';

        return [
            [$data[0], $data[1], 8574],
            [[55, 30, 5, 4, 2], [100, 20, 10, 10, 5], 2],
            [[2, 2, 2], [10, 10, 1], 1],
            [[30, 29, 19, 5], [25, 25, 25, 25, 25], 2],
        ];
    }
}
