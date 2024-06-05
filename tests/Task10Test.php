<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task10;
use PHPUnit\Framework\TestCase;

final class Task10Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test10(string $s, string $p, bool $result): void
    {
        $sut = new Task10();

        self::assertSame($sut->isMatch($s, $p), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['aaaaaaaaaaaaaaaaaaab', 'a*a*a*a*a*a*a*a*a*a*', false],
            ['a', 'ab*', true],
            ['mississippi', 'mis*is*p*.', false],
            ['aab', 'c*a*b*', true],
            ['aa', 'a', false],
            ['aa', 'a*', true],
            ['ab', '.*', true],
        ];
    }
}
