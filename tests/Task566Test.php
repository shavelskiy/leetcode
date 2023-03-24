<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Task566;
use PHPUnit\Framework\TestCase;

final class Task566Test extends TestCase
{
    public function test566(): void
    {
        $sut = new Task566();

        self::assertSame(
            $sut->matrixReshape([[1], [2], [3], [4]], 2, 2),
            [[1, 2], [3, 4]],
        );

        self::assertSame(
            $sut->matrixReshape([[1, 2], [3, 4]], 1, 4),
            [[1, 2, 3, 4]],
        );

        self::assertSame(
            $sut->matrixReshape([[1, 2], [3, 4]], 2, 4),
            [[1, 2], [3, 4]],
        );
    }
}
