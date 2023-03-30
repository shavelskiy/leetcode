<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task190;
use PHPUnit\Framework\TestCase;

final class Task190Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test190(int $n, int $result): void
    {
        $sut = new Task190();

        self::assertSame($sut->reverseBits($n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [13, 2952790016],
            [43261596, 964176192],
            [4294967293, 3221225471],
        ];
    }
}
