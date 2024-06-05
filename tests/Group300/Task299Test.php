<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task299Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test299(string $secret, string $guess, string $result): void
    {
        $sut = new Task299();

        self::assertSame($sut->getHint($secret, $guess), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['1807', '7810', '1A3B'],
            ['1123', '0111', '1A1B'],
        ];
    }
}
