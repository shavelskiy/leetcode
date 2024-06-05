<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group700\Task633;
use PHPUnit\Framework\TestCase;

final class Task633Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test633(int $c, bool $result): void
    {
        $sut = new Task633();

        self::assertSame($sut->judgeSquareSum($c), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [5, true],
            [3, false],
        ];
    }
}
