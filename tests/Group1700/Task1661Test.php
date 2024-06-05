<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1661Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1661(int $a, int $result): void
    {
        $sut = new Task1661();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
