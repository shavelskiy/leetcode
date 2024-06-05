<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2806Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2806(int $a, int $result): void
    {
        $sut = new Task2806();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
