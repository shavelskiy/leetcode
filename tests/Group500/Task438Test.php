<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task438Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test438(string $s, string $p, array $result): void
    {
        $sut = new Task438();

        self::assertSame($sut->findAnagrams($s, $p), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['cbaebabacd', 'abc', [6, 0]],
            ['abab', 'ab', [2, 1, 0]],
        ];
    }
}
