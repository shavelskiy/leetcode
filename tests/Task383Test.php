<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group400\Task383;
use PHPUnit\Framework\TestCase;

final class Task383Test extends TestCase
{
    public function test383(): void
    {
        $sut = new Task383();

        self::assertSame($sut->canConstruct('a', 'b'), false);
        self::assertSame($sut->canConstruct('aa', 'ab'), false);
        self::assertSame($sut->canConstruct('aa', 'aab'), true);
    }
}
