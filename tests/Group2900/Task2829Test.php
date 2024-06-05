<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2829Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2829(int $a, int $result): void
    {
        $sut = new Task2829();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
