<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task151Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test151(string $s, string $result): void
    {
        $sut = new Task151();

        self::assertSame($sut->reverseWords($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['the sky is blue', 'blue is sky the'],
            ['  hello world  ', 'world hello'],
            ['a good   example', 'example good a'],
        ];
    }
}
