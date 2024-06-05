<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2438Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2438(int $a, int $result): void
    {
        $sut = new Task2438();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
