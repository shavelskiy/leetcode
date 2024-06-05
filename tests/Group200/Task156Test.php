<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task156Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test156(int $a, int $result): void
    {
        $sut = new Task156();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
