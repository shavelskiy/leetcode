<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1557Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1557(int $a, int $result): void
    {
        $sut = new Task1557();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
