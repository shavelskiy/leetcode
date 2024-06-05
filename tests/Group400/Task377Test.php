<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task377Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test377(int $a, int $result): void
    {
        $sut = new Task377();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
