<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2483Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2483(string $customers, int $result): void
    {
        $sut = new Task2483();

        self::assertSame($sut->bestClosingTime($customers), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['YN', 1],
            ['YYNY', 2],
            ['NNNNN', 0],
            ['YYYY', 4],
        ];
    }
}
