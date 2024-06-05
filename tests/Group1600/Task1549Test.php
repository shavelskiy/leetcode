<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1549Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1549(int $a, int $result): void
    {
        $sut = new Task1549();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
