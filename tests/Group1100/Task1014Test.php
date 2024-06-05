<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1014Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1014(array $values, int $result): void
    {
        $sut = new Task1014();

        self::assertSame($sut->maxScoreSightseeingPair($values), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[8, 1, 5, 2, 6], 11],
            [[1, 2], 2],
        ];
    }
}
