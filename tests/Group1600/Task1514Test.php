<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1514Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1514(int $a, int $result): void
    {
        $sut = new Task1514();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
