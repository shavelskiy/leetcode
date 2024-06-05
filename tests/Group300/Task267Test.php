<?php

declare(strict_types=1);

namespace App\Tasks\Group300;

use PHPUnit\Framework\TestCase;

final class Task267Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test267(int $a, int $result): void
    {
        $sut = new Task267();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
