<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task278;
use PHPUnit\Framework\TestCase;

/**
 * https://leetcode.com/problems/first-bad-version.
 */
final class Task278Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test278(int $bad, int $n): void
    {
        $sut = new Task278();
        $sut->input($bad);
        self::assertSame($sut->firstBadVersion($n), $bad);
    }

    public static function dataProvider(): array
    {
        return [
            [4, 5],
            [1, 8],
            [2, 5],
            [1, 1],
        ];
    }
}
