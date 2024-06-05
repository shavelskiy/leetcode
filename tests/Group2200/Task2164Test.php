<?php

declare(strict_types=1);

namespace App\Tasks\Group2200;

use PHPUnit\Framework\TestCase;

final class Task2164Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2164(int $a, int $result): void
    {
        $sut = new Task2164();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
