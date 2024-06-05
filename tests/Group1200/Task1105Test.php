<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1105Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1105(int $a, int $result): void
    {
        $sut = new Task1105();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
