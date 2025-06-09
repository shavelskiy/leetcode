<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task240Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test240(array $matrix, int $a, bool $result): void
    {
        $sut = new Task240();

        self::assertSame($sut->searchMatrix($matrix, $a), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[[1, 4, 7, 11, 15], [2, 5, 8, 12, 19], [3, 6, 9, 16, 22], [10, 13, 14, 17, 24], [18, 21, 23, 26, 30]], 5, true],
            [[[1, 4, 7, 11, 15], [2, 5, 8, 12, 19], [3, 6, 9, 16, 22], [10, 13, 14, 17, 24], [18, 21, 23, 26, 30]], 20, false],
        ];
    }
}
