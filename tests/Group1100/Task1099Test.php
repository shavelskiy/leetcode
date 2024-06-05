<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1099Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1099(int $a, int $result): void
    {
        $sut = new Task1099();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
