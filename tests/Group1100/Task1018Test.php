<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1018Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1018(int $a, int $result): void
    {
        $sut = new Task1018();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}