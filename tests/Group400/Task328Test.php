<?php

declare(strict_types=1);

namespace App\Tasks\Group400;

use PHPUnit\Framework\TestCase;

final class Task328Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test328(int $a, int $result): void
    {
        $sut = new Task328();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
