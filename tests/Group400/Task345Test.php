<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task345Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test345(string $s, string $result): void
    {
        $sut = new Task345();

        self::assertSame($sut->reverseVowels($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['hello', 'holle'],
            ['leetcode', 'leotcede'],
            ['race car', 'race car'],
        ];
    }
}
