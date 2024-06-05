<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use App\Tasks\Group100\Task6;
use PHPUnit\Framework\TestCase;

final class Task6Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test6(string $s, int $numRows, string $result): void
    {
        $sut = new Task6();

        self::assertSame($sut->convert($s, $numRows), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['PAYPALISHIRING', 3, 'PAHNAPLSIIGYIR'],
            ['PAYPALISHIRING', 4, 'PINALSIGYAHRPI'],
        ];
    }
}
