<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task387;
use PHPUnit\Framework\TestCase;

final class Task387Test extends TestCase
{
    public function test387(): void
    {
        $sut = new Task387();

        self::assertSame($sut->firstUniqChar('leetcode'), 0);
        self::assertSame($sut->firstUniqChar('loveleetcode'), 2);
        self::assertSame($sut->firstUniqChar('aabb'), -1);
    }
}
