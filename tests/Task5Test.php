<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task5;
use PHPUnit\Framework\TestCase;

final class Task5Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test5(string $s, string $result): void
    {
        $sut = new Task5();

        self::assertSame($sut->longestPalindrome($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['babad', 'bab'],
            ['cbbd', 'bb'],
        ];
    }
}
