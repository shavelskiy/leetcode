<?php

declare(strict_types=1);

namespace App\Tasks\Group800;

use PHPUnit\Framework\TestCase;

final class Task744Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test744(array $letters, string $target, string $result): void
    {
        $sut = new Task744();

        self::assertSame($sut->nextGreatestLetter($letters, $target), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [['e', 'e', 'e', 'e', 'e', 'e', 'n', 'n', 'n', 'n'], 'e', 'n'],
            [['e', 'e', 'g', 'g'], 'g', 'e'],
            [['c', 'f', 'j'], 'a', 'c'],
            [['c', 'f', 'j'], 'c', 'f'],
            [['x', 'x', 'y', 'y'], 'z', 'x'],
        ];
    }
}
