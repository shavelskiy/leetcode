<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1130Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1130(int $a, int $result): void
    {
        $sut = new Task1130();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
