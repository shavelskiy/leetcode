<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task371Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test371(int $a, int $result): void
    {
        $sut = new Task371();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
