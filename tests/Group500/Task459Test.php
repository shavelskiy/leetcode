<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task459Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test459(string $s, bool $result): void
    {
        $sut = new Task459();

        self::assertSame($sut->repeatedSubstringPattern($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['abab', true],
            ['aba', false],
            ['abcabcabcabc', true],
        ];
    }
}
