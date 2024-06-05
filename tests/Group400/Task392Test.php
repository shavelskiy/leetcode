<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task392Test extends TestCase
{
    public function test392(): void
    {
        $sut = new Task392();

        self::assertSame($sut->isSubsequence('', 'ahbgdc'), true);
        self::assertSame($sut->isSubsequence('abc', 'ahbgdc'), true);
        self::assertSame($sut->isSubsequence('axc', 'ahbgdc'), false);
    }
}
