<?php

declare(strict_types=1);

namespace app\Tests;

use App\Tasks\Group100\Task35;
use PHPUnit\Framework\TestCase;

final class Task35Test extends TestCase
{
    public function test35(): void
    {
        $sut = new Task35();

        $nums = [1, 3, 5, 6];

        self::assertSame($sut->searchInsert($nums, 5), 2);
        self::assertSame($sut->searchInsert($nums, 2), 1);
        self::assertSame($sut->searchInsert($nums, 7), 4);
    }
}
