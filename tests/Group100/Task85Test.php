<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task85Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test85(array $matrix, int $result): void
    {
        $sut = new Task85();

        self::assertSame($sut->maximalRectangle($matrix, $result), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[['1', '0', '1', '0', '0'], ['1', '0', '1', '1', '1'], ['1', '1', '1', '1', '1'], ['1', '0', '0', '1', '0']], 6],
            [[['0']], 0],
            [[['1']], 1],
        ];
    }
}
