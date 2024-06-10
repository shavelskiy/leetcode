<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1657Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1657(string $word1, string $word2, bool $result): void
    {
        $sut = new Task1657();

        self::assertSame($sut->closeStrings($word1, $word2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abc', 'bca', true],
            ['a', 'aa', false],
            ['cabbba', 'abbccc', true],
        ];
    }
}
