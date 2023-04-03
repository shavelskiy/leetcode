<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task231;
use PHPUnit\Framework\TestCase;

final class Task231Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test231(int $n, bool $result): void
    {
        $sut = new Task231();

        self::assertSame($sut->isPowerOfTwo($n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, true],
            [16, true],
            [3, false],
        ];
    }
}
