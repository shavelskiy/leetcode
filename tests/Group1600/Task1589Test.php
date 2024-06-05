<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1589Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1589(int $a, int $result): void
    {
        $sut = new Task1589();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
