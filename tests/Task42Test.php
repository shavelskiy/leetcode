<?php

declare(strict_types=1);

namespace App\Tests;

use App\Tasks\Group100\Task42;
use PHPUnit\Framework\TestCase;

final class Task42Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test42(array $height, int $result): void
    {
        $sut = new Task42();

        self::assertSame($sut->trap($height), $result);
    }

    public static function dataProvider(): array
    {
        return [
            [[0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1], 6],
            [[4, 2, 0, 3, 2, 5], 9],
        ];
    }
}
