<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1743Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1743(int $a, int $result): void
    {
        $sut = new Task1743();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
