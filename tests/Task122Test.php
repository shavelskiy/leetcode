<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task122;
use PHPUnit\Framework\TestCase;

final class Task122Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test122(array $prices, int $result): void
    {
        $sut = new Task122();

        self::assertSame($sut->maxProfit($prices), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[7, 1, 5, 3, 6, 4], 7],
            [[1, 2, 3, 4, 5], 4],
            [[7, 6, 4, 3, 1], 0],
        ];
    }
}
