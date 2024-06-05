<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2560Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2560(int $a, int $result): void
    {
        $sut = new Task2560();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
