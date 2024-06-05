<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task374Test extends TestCase
{
    public function test374(): void
    {
        $sut = new Task374();

        $sut->pick(1702766719);
        self::assertSame($sut->guessNumber(2126753390), 1702766719);

        $sut->pick(6);
        self::assertSame($sut->guessNumber(10), 6);

        $sut->pick(6);
        self::assertSame($sut->guessNumber(1), 1);

        $sut->pick(1);
        self::assertSame($sut->guessNumber(2), 1);
    }
}
