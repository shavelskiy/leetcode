<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group300\Task287;
use PHPUnit\Framework\TestCase;

final class Task287Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $nums
     */
    public function test287(array $nums, int $result): void
    {
        $sut = new Task287();

        self::assertSame($sut->findDuplicate($nums), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-287.php';

        return [
            [[1, 3, 4, 2, 2], 2],
            [[3, 1, 3, 4, 2], 3],
            [$data, 59078],
        ];
    }
}
