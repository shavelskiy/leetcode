<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1585Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1585(int $a, int $result): void
    {
        $sut = new Task1585();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
