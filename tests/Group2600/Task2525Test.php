<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2525Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2525(int $a, int $result): void
    {
        $sut = new Task2525();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}