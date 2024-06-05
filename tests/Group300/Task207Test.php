<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task207Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $prerequisites
     */
    public function test207(int $num, array $prerequisites, bool $result): void
    {
        $sut = new Task207();

        self::assertSame($sut->canFinish($num, $prerequisites), $result);
    }

    public static function dataProvider(): array
    {
        // $data = require __DIR__ . '/../data/task-207.php';

        return [
            // [100, $data, true],
            [7, [[1, 0], [0, 3], [0, 2], [3, 2], [2, 5], [4, 5], [5, 6], [2, 4]], true],
            [5, [[1, 4], [2, 4], [3, 1], [3, 2]], true],
            [4, [[0, 1], [3, 1], [1, 3], [3, 2]], false],
            [2, [[1, 0]], true],
            [2, [[1, 0], [0, 1]], false],
        ];
    }
}
