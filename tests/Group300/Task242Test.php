<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task242Test extends TestCase
{
    public function test242(): void
    {
        $sut = new Task242();

        self::assertSame($sut->isAnagram('anagram', 'nagaram'), true);
        self::assertSame($sut->isAnagram('rat', 'cat'), false);
    }
}
