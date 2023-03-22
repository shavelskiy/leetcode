<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task13;
use PHPUnit\Framework\TestCase;

final class Task13Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test13(string $s, int $result): void
    {
        $sut = new Task13();

        self::assertSame($sut->romanToInt($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['III', 3],
            ['LVIII', 58],
            ['MCMXCIV', 1994],
        ];
    }
}
