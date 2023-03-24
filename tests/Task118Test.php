<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task118;
use PHPUnit\Framework\TestCase;

final class Task118Test extends TestCase
{
    public function test118(): void
    {
        $sut = new Task118();

        self::assertSame(
            $sut->generate(5),
            [[1], [1, 1], [1, 2, 1], [1, 3, 3, 1], [1, 4, 6, 4, 1]],
        );

        self::assertSame(
            $sut->generate(1),
            [[1]],
        );
    }
}
