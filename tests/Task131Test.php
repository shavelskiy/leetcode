<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task131;
use PHPUnit\Framework\TestCase;

final class Task131Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test131(string $s, array $result): void
    {
        $sut = new Task131();

        self::assertSame($sut->partition($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['cdd', [['c', 'd', 'd'], ['c', 'dd']]],
            ['aab', [['a', 'a', 'b'], ['aa', 'b']]],
            ['a', [['a']]],
        ];
    }
}
