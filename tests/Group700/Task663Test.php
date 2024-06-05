<?php

declare(strict_types=1);

namespace App\Tasks\Group700;

use PHPUnit\Framework\TestCase;

final class Task663Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test663(int $a, int $result): void
    {
        $sut = new Task663();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
