<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task56Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test56(int $a, int $result): void
    {
        $sut = new Task56();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
