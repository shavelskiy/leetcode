<?php

declare(strict_types=1);

namespace App\Tasks\Group1500;

use PHPUnit\Framework\TestCase;

final class Task1456Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1456(string $s, int $k, int $result): void
    {
        $sut = new Task1456();

        self::assertSame($sut->maxVowels($s, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abciiidef', 3, 3],
            ['aeiou', 2, 2],
            ['leetcode', 3, 2],
        ];
    }
}
