<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group500\Task409;
use PHPUnit\Framework\TestCase;

final class Task409Test extends TestCase
{
    public function test409(): void
    {
        $sut = new Task409();

        self::assertSame($sut->longestPalindrome('abccccdd'), 7);
        self::assertSame($sut->longestPalindrome('a'), 1);
    }
}
