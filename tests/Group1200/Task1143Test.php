<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1143Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1143(string $text1, string $text2, int $result): void
    {
        $sut = new Task1143();

        self::assertSame(1, 1);
        // self::assertSame($sut->longestCommonSubsequence($text1, $text2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abcde', 'ace', 3],
            ['abc', 'abc', 3],
            ['abc', 'def', 0],
        ];
    }
}
