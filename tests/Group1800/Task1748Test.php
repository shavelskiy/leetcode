<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1748Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1748(int $a, int $result): void
    {
        $sut = new Task1748();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
