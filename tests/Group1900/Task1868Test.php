<?php

declare(strict_types=1);

namespace App\Tasks\Group1900;

use PHPUnit\Framework\TestCase;

final class Task1868Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1868(int $a, int $result): void
    {
        $sut = new Task1868();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
