<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task379Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test379(int $a, int $result): void
    {
        $sut = new Task379();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
