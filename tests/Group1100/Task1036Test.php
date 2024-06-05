<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1036Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1036(int $a, int $result): void
    {
        $sut = new Task1036();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
