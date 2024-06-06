<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1071Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1071(string $str1, string $str2, string $result): void
    {
        $sut = new Task1071();

        self::assertSame($sut->gcdOfStrings($str1, $str2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['ABCABC', 'ABC', 'ABC'],
            ['ABABAB', 'ABAB', 'AB'],
            ['LEET', 'CODE', ''],
        ];
    }
}
