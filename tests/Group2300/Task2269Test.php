<?php

declare(strict_types=1);

namespace App\Tasks\Group2300;

use PHPUnit\Framework\TestCase;

final class Task2269Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2269(int $a, int $result): void
    {
        $sut = new Task2269();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
