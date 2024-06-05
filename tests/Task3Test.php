<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task3;
use PHPUnit\Framework\TestCase;

final class Task3Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test3(string $s, int $result): void
    {
        $sut = new Task3();

        self::assertSame($sut->lengthOfLongestSubstring($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abcabcbb', 3],
            ['bbbbb', 1],
            ['pwwkew', 3],
        ];
    }
}
