<?php

declare(strict_types=1);

namespace App\Tasks\Group1100;

use PHPUnit\Framework\TestCase;

final class Task1023Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1023(int $a, int $result): void
    {
        $sut = new Task1023();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
