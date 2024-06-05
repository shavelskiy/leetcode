<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task283Test extends TestCase
{
    public function test283(): void
    {
        $sut = new Task283();

        $data = [0, 1, 0, 3, 12];
        $sut->moveZeroes($data);
        self::assertSame($data, [1, 3, 12, 0, 0]);

        $data = [0];
        $sut->moveZeroes($data);
        self::assertSame($data, [0]);
    }
}
