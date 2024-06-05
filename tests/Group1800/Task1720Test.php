<?php

declare(strict_types=1);

namespace App\Tasks\Group1800;

use PHPUnit\Framework\TestCase;

final class Task1720Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1720(int $a, int $result): void
    {
        $sut = new Task1720();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
