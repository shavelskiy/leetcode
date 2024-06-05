<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Tasks\Group100\Task51;
use PHPUnit\Framework\TestCase;

final class Task51Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<string[]> $result
     */
    public function test51(int $n, array $result): void
    {
        $sut = new Task51();

        self::assertSame($sut->solveNQueens($n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [0, []],
            [1, [['Q']]],
            [2, []],
            [3, []],
            [4, [['.Q..', '...Q', 'Q...', '..Q.'], ['..Q.', 'Q...', '...Q', '.Q..']]],
        ];
    }
}
