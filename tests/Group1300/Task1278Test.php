<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1278Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1278(int $a, int $result): void
    {
        $sut = new Task1278();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
