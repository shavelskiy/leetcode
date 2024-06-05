<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2437Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2437(int $a, int $result): void
    {
        $sut = new Task2437();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
