<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task76;
use PHPUnit\Framework\TestCase;

final class Task76Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test76(string $s, string $t, string $result): void
    {
        $sut = new Task76();

        self::assertSame($sut->minWindow($s, $t), $result);
    }

    public static function dataProvider(): array
    {
        $data = require __DIR__ . '/../data/task-76.php';

        return [
            ['ADOBECODEBANC', 'ABC', 'BANC'],
            ['a', 'a', 'a'],
            ['bba', 'ab', 'ba'],
            ['aa', 'aa', 'aa'],
            [$data[0], $data[1], $data[2]],
        ];
    }
}
