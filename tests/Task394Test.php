<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task394;
use PHPUnit\Framework\TestCase;

final class Task394Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test394(string $s, string $result): void
    {
        $sut = new Task394();

        self::assertSame($sut->decodeString($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['3[a]2[bc]', 'aaabcbc'],
            ['3[a2[c]]', 'accaccacc'],
            ['2[abc]3[cd]ef', 'abcabccdcdcdef'],
        ];
    }
}
