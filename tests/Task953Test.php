<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task953;
use PHPUnit\Framework\TestCase;

final class Task953Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test953(array $words, string $order, bool $result): void
    {
        $sut = new Task953();

        self::assertSame($sut->isAlienSorted($words, $order), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [['hello', 'hello'], 'abcdefghijklmnopqrstuvwxyz', true],
            [['hello', 'leetcode'], 'hlabcdefgijkmnopqrstuvwxyz', true],
            [['word', 'world', 'row'], 'worldabcefghijkmnpqstuvxyz', false],
            [['apple', 'app'], 'abcdefghijklmnopqrstuvwxyz', false],
        ];
    }
}
