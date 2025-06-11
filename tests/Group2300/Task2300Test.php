<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2300Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2300(array $spells, array $potions, int $success, array $result): void
    {
        $sut = new Task2300();

        self::assertSame($sut->successfulPairs($spells, $potions, $success), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[5, 1, 3], [1, 2, 3, 4, 5], 7, [4, 0, 3]],
            [[3, 1, 2], [8, 5, 8], 16, [2, 0, 2]],
        ];
    }
}
