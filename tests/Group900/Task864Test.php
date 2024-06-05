<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task864Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test864(int $a, int $result): void
    {
        $sut = new Task864();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
