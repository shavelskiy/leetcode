<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task256Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test256(int $a, int $result): void
    {
        $sut = new Task256();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}