<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task649Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test649(string $senate, string $result): void
    {
        $sut = new Task649();

        self::assertSame($sut->predictPartyVictory($senate), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['DRRDRDRDRDDRDRDR', 'Radiant'],
            ['DRDRR', 'Dire'],
            ['RD', 'Radiant'],
            ['RDD', 'Dire'],
        ];
    }
}
