<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use App\Tasks\Group1800\Task1790;
use PHPUnit\Framework\TestCase;

final class Task1790Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1790(string $s1, string $s2, bool $result): void
    {
        $sut = new Task1790();

        self::assertSame($sut->areAlmostEqual($s1, $s2), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['qgqeg', 'gqgeq', false],
            ['bank', 'kanb', true],
            ['attack', 'defend', false],
            ['kelb', 'kelb', true],
        ];
    }
}
