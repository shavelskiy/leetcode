<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task208Test extends TestCase
{
    public function test208(): void
    {
        $sut = new Task208();
        $sut->insert('apple');

        self::assertSame($sut->search('apple'), true);
        self::assertSame($sut->search('app'), false);
        self::assertSame($sut->startsWith('app'), true);

        $sut->insert('app');

        self::assertSame($sut->search('app'), true);
    }
}
