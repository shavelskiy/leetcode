<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task1704;
use PHPUnit\Framework\TestCase;

final class Task1704Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1704(string $s, bool $result): void
    {
        $sut = new Task1704();

        self::assertSame($sut->halvesAreAlike($s), $result);
    }

    public static function dataProvider(): array
    {
        return [
            ['book', true],
            ['textbook', false],
            ['AbCdEfGh', true],
        ];
    }
}
