<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1503Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1503(int $a, int $result): void
    {
        $sut = new Task1503();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
