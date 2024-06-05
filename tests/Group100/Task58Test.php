<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task58Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test58(string $s, int $result): void
    {
        $sut = new Task58();

        self::assertSame($sut->lengthOfLastWord($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['Hello World', 5],
            ['   fly me   to   the moon  ', 4],
            ['luffy is still joyboy', 6],
        ];
    }
}
