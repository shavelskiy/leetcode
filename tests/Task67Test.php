<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task67;
use PHPUnit\Framework\TestCase;

final class Task67Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test67(string $a, string $b, string $result): void
    {
        $sut = new Task67();

        self::assertSame($sut->addBinary($a, $b), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['11', '1', '100'],
            ['1010', '1011', '10101'],
        ];
    }
}
