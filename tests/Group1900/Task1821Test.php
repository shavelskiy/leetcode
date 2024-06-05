<?php

declare(strict_types=1);

namespace App\Tasks\Group1900;

use PHPUnit\Framework\TestCase;

final class Task1821Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1821(int $a, int $result): void
    {
        $sut = new Task1821();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
