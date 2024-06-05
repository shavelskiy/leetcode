<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1586Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1586(int $a, int $result): void
    {
        $sut = new Task1586();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
