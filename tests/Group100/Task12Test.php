<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task12Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test12(int $a, string $result): void
    {
        $sut = new Task12();

        self::assertSame($sut->intToRoman($a, $result), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [3749, 'MMMDCCXLIX'],
            [58, 'LVIII'],
            [1994, 'MCMXCIV'],
        ];
    }
}
