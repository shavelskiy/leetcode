<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1719Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1719(int $a, int $result): void
    {
        $sut = new Task1719();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
