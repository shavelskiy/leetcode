<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task28;
use PHPUnit\Framework\TestCase;

final class Task28Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test28(string $haystack, string $needle, int $result): void
    {
        $sut = new Task28();

        self::assertSame($sut->strStr($haystack, $needle), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['sadbutsad', 'sad', 0],
            ['leetcode', 'leeto', -1],
            ['hello', 'll', 2],
            ['a', 'a', 0],
        ];
    }
}
