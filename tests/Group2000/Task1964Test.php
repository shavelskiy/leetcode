<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1964Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1964(int $a, int $result): void
    {
        $sut = new Task1964();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
