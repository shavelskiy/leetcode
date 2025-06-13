<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task790Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test790(int $n, int $result): void
    {
        $sut = new Task790();

        self::assertSame($sut->numTilings($n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [60, 882347204],
            [28, 914332884],
            [3, 5],
            [1, 1],
        ];
    }
}
