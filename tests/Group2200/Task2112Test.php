<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2112Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2112(int $a, int $result): void
    {
        $sut = new Task2112();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
