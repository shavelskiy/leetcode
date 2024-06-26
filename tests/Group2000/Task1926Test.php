<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1926Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<string[]> $maze
     * @param int[]           $entrance
     */
    public function test1926(array $maze, array $entrance, int $result): void
    {
        $sut = new Task1926();

        // dd($sut->nearestExit($maze, $entrance));
        self::assertSame($sut->nearestExit($maze, $entrance), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[['+', '.', '.', '.', '.', '.', '.', '+', '+', '.', '.', '.', '.', '.', '.', '.', '.', '.', '+', '.'], ['.', '.', '+', '+', '.', '.', '.', '.', '.', '.', '.', '.', '+', '.', '.', '+', '+', '.', '+', '.'], ['.', '.', '.', '+', '.', '+', '.', '.', '.', '.', '.', '.', '.', '.', '.', '+', '+', '.', '.', '.'], ['+', '.', '.', '.', '.', '.', '.', '.', '.', '.', '.', '.', '.', '+', '+', '.', '.', '.', '.', '.'], ['.', '.', '.', '+', '+', '+', '.', '+', '+', '.', '.', '.', '.', '+', '.', '.', '.', '.', '.', '.'], ['+', '.', '+', '.', '.', '.', '.', '.', '+', '.', '.', '.', '.', '.', '.', '.', '.', '.', '.', '.'], ['.', '+', '+', '+', '+', '+', '+', '.', '.', '.', '.', '+', '.', '+', '+', '.', '.', '+', '+', '.'], ['.', '.', '.', '.', '.', '+', '.', '.', '.', '+', '.', '.', '+', '.', '.', '+', '.', '.', '.', '+'], ['.', '.', '.', '.', '+', '.', '.', '.', '+', '+', '.', '+', '.', '.', '+', '.', '.', '+', '.', '.'], ['+', '+', '+', '.', '.', '.', '+', '+', '+', '+', '.', '+', '+', '.', '.', '.', '.', '.', '.', '.'], ['+', '+', '.', '+', '.', '+', '.', '.', '.', '.', '.', '.', '.', '.', '+', '+', '.', '.', '+', '+'], ['.', '.', '.', '.', '+', '.', '.', '.', '.', '+', '.', '.', '+', '.', '.', '.', '.', '.', '.', '.'], ['+', '.', '+', '.', '.', '.', '.', '+', '+', '.', '.', '.', '.', '.', '.', '+', '.', '.', '.', '+'], ['.', '.', '+', '+', '.', '.', '.', '.', '+', '.', '.', '.', '+', '.', '+', '+', '+', '+', '+', '.'], ['.', '.', '.', '.', '.', '.', '+', '.', '.', '.', '+', '.', '.', '.', '.', '.', '.', '.', '.', '.'], ['.', '.', '.', '.', '.', '+', '.', '.', '+', '.', '+', '.', '.', '+', '+', '+', '.', '.', '.', '+'], ['.', '.', '.', '.', '.', '+', '.', '.', '+', '.', '.', '+', '.', '+', '+', '+', '.', '.', '.', '.'], ['.', '+', '+', '+', '.', '.', '+', '.', '.', '+', '+', '.', '+', '+', '.', '+', '+', '.', '.', '.']], [16, 16], 2],
            [[['+', '.', '+', '+', '+', '+', '+'], ['+', '.', '+', '.', '.', '.', '+'], ['+', '.', '+', '.', '+', '.', '+'], ['+', '.', '.', '.', '+', '.', '+'], ['+', '+', '+', '+', '+', '+', '.']], [0, 1], -1],
            [[['+', '+', '.', '+'], ['.', '.', '.', '+'], ['+', '+', '+', '.']], [1, 2], 1],
            [[['+', '+', '+'], ['.', '.', '.'], ['+', '+', '+']], [1, 0], 2],
            [[['.', '+']], [0, 0], -1],
        ];
    }
}
