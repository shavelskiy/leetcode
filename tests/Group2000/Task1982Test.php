<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1982Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1982(int $a, int $result): void
    {
        $sut = new Task1982();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
