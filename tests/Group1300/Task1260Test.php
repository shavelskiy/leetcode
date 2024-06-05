<?php

declare(strict_types=1);

namespace App\Tasks\Group1300;

use PHPUnit\Framework\TestCase;

final class Task1260Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1260(int $a, int $result): void
    {
        $sut = new Task1260();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
