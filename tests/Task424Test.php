<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task424;
use PHPUnit\Framework\TestCase;

final class Task424Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test424(string $s, int $k, int $result): void
    {
        $sut = new Task424();

        self::assertSame($sut->characterReplacement($s, $k), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['ABAB', 2, 4],
            ['AABABBA', 1, 4],
        ];
    }
}
