<?php

declare(strict_types=1);

namespace App\Tasks\Group2000;

use PHPUnit\Framework\TestCase;

final class Task1917Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1917(int $a, int $result): void
    {
        $sut = new Task1917();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
