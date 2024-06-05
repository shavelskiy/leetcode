<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1300\Task1275;
use PHPUnit\Framework\TestCase;

final class Task1275Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<int[]> $moves
     */
    public function test1275(array $moves, string $result): void
    {
        $sut = new Task1275();

        self::assertSame($sut->tictactoe($moves), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[0, 0], [2, 0], [1, 1], [2, 1], [2, 2]], 'A'],
            [[[0, 0], [1, 1], [0, 1], [0, 2], [1, 0], [2, 0]], 'B'],
            [[[0, 0], [1, 1], [2, 0], [1, 0], [1, 2], [2, 1], [0, 1], [0, 2], [2, 2]], 'Draw'],
            [[[0, 0], [1, 1]], 'Pending'],
            [[[2, 0], [1, 1], [0, 2], [2, 1], [1, 2], [1, 0], [0, 0], [0, 1]], 'B'],
        ];
    }
}
