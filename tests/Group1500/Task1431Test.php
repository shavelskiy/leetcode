<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1431Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[]  $candies
     * @param bool[] $result
     */
    public function test1431(array $candies, int $extraCandies, array $result): void
    {
        $sut = new Task1431();

        self::assertSame($sut->kidsWithCandies($candies, $extraCandies), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[2, 3, 5, 1, 3], 3, [true, true, true, false, true]],
            [[4, 2, 1, 1, 2], 1, [true, false, false, false, false]],
            [[12, 1, 12], 10, [true, false, true]],
        ];
    }
}
