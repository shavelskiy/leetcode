<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task96Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test96(int $n, int $result): void
    {
        $sut = new Task96();

        self::assertSame($sut->numTrees($n), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
            [3, 5],
            [4, 14],
        ];
    }
}
