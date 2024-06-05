<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2213Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2213(int $a, int $result): void
    {
        $sut = new Task2213();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
