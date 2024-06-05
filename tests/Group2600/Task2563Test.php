<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2563Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2563(int $a, int $result): void
    {
        $sut = new Task2563();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
