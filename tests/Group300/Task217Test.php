<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task217Test extends TestCase
{
    public function test217(): void
    {
        $sut = new Task217();

        self::assertSame($sut->containsDuplicate([1, 2, 3, 1]), true);
        self::assertSame($sut->containsDuplicate([1, 2, 3, 4]), false);
        self::assertSame($sut->containsDuplicate([1, 1, 1, 3, 3, 4, 3, 2, 4, 2]), true);
    }
}
