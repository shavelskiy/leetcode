<?php

declare(strict_types=1);

namespace App\Tasks\Group1400;

use PHPUnit\Framework\TestCase;

final class Task1350Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1350(int $a, int $result): void
    {
        $sut = new Task1350();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
