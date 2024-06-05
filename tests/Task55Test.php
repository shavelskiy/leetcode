<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task55;
use PHPUnit\Framework\TestCase;

final class Task55Test extends TestCase
{
    public function test55(): void
    {
        $sut = new Task55();

        self::assertSame($sut->canJump([2, 3, 1, 1, 4]), true);
        self::assertSame($sut->canJump([3, 2, 1, 0, 4]), false);
    }
}
