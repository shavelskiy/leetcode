<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1309;
use PHPUnit\Framework\TestCase;

final class Task1309Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1309(string $s, string $result): void
    {
        $sut = new Task1309();

        self::assertSame($sut->freqAlphabets($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['10#11#12', 'jkab'],
            ['1326#', 'acz'],
        ];
    }
}
