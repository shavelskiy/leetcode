<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1306Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1306(int $a, int $result): void
    {
        $sut = new Task1306();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
