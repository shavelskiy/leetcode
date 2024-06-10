<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1732Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param int[] $gain
     */
    public function test1732(array $gain, int $result): void
    {
        $sut = new Task1732();

        self::assertSame($sut->largestAltitude($gain), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[-5, 1, 5, 0, -7], 1],
            [[-4, -3, -2, -1, 4, 3, 2], 0],
        ];
    }
}
