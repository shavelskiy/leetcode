<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task50Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test50(float $x, int $n, float $result): void
    {
        $sut = new Task50();

        self::assertSame($sut->myPow($x, $n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [2.0, -2, -4.0],
        ];
    }
}
