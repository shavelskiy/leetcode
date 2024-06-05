<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group300\Task205;
use PHPUnit\Framework\TestCase;

final class Task205Test extends TestCase
{
    public function test205(): void
    {
        $sut = new Task205();

        self::assertSame($sut->isIsomorphic('badc', 'baba'), false);
        self::assertSame($sut->isIsomorphic('egg', 'add'), true);
        self::assertSame($sut->isIsomorphic('foo', 'bar'), false);
        self::assertSame($sut->isIsomorphic('paper', 'title'), true);
    }
}
