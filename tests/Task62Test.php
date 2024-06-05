<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task62;
use PHPUnit\Framework\TestCase;

final class Task62Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test62(int $m, int $n, int $result): void
    {
        $sut = new Task62();

        self::assertSame($sut->uniquePaths($m, $n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [3, 7, 28],
            [3, 2, 3],
        ];
    }
}
