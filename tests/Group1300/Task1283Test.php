<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1283Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1283(int $a, int $result): void
    {
        $sut = new Task1283();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
