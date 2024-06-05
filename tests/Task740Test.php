<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group800\Task740;
use PHPUnit\Framework\TestCase;

final class Task740Test extends TestCase
{
    public function test740(): void
    {
        $sut = new Task740();

        self::assertSame($sut->deleteAndEarn([3, 4, 2]), 6);
        self::assertSame($sut->deleteAndEarn([2, 2, 3, 3, 3, 4]), 9);
    }
}
