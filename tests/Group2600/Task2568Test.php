<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2568Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2568(int $a, int $result): void
    {
        $sut = new Task2568();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
