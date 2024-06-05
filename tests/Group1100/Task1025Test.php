<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1025Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1025(int $a, int $result): void
    {
        $sut = new Task1025();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
