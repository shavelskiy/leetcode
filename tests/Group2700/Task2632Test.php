<?php

declare(strict_types=1);

namespace App\Tasks\Group2700;

use PHPUnit\Framework\TestCase;

final class Task2632Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2632(int $a, int $result): void
    {
        $sut = new Task2632();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
