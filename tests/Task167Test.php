<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task167;
use PHPUnit\Framework\TestCase;

final class Task167Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $numbers
     * @param int[] $result
     */
    public function test167(array $numbers, int $targer, array $result): void
    {
        $sut = new Task167();

        self::assertSame($sut->twoSum($numbers, $targer), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-167.php';

        return [
            [$data, 5, [13011, 13012]],
            [[2, 7, 11, 15], 9, [1, 2]],
            [[2, 3, 4], 6, [1, 3]],
            [[-1, 0], -1, [1, 2]],
        ];
    }
}
