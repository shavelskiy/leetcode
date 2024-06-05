<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group1600\Task1572;
use PHPUnit\Framework\TestCase;

final class Task1572Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1572(array $mat, int $result): void
    {
        $sut = new Task1572();

        self::assertSame($sut->diagonalSum($mat), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 2, 3], [4, 5, 6], [7, 8, 9]], 25],
            [[[1, 1, 1, 1], [1, 1, 1, 1], [1, 1, 1, 1], [1, 1, 1, 1]], 8],
            [[[5]], 5],
        ];
    }
}
