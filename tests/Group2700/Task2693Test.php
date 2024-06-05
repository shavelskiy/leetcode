<?php

declare(strict_types=1);

namespace App\Tasks\Group2700;

use PHPUnit\Framework\TestCase;

final class Task2693Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2693(int $a, int $result): void
    {
        $sut = new Task2693();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
