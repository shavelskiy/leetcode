<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1538Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1538(int $a, int $result): void
    {
        $sut = new Task1538();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
