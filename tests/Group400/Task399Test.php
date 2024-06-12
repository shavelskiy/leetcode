<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task399Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param array<string[]> $equations
     * @param float[]         $values
     * @param array<string[]> $queries
     * @param float[]         $result
     */
    public function test399(array $equations, array $values, array $queries, array $result): void
    {
        $sut = new Task399();

        self::assertSame($sut->calcEquation($equations, $values, $queries), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[['a', 'aa']], [9.0], [['aa', 'a'], ['aa', 'aa']], [0.1111111111111111, 1.0]],
            [[['a', 'e'], ['b', 'e']], [4.0, 3.0], [['a', 'b'], ['e', 'e'], ['x', 'x']], [1.3333333333333333, 1.0, -1.0]],
            [[['a', 'b'], ['b', 'c']], [2.0, 3.0], [['a', 'c'], ['b', 'a'], ['a', 'e'], ['a', 'a'], ['x', 'x']], [6.0, 0.5, -1.0, 1.0, -1.0]],
            [[['a', 'b'], ['b', 'c'], ['bc', 'cd']], [1.5, 2.5, 5.0], [['a', 'c'], ['c', 'b'], ['bc', 'cd'], ['cd', 'bc']], [3.75, 0.4, 5.0, 0.2]],
            [[['a', 'b']], [0.5], [['a', 'b'], ['b', 'a'], ['a', 'c'], ['x', 'y']], [0.5, 2.0, -1.0, -1.0]],
        ];
    }
}
