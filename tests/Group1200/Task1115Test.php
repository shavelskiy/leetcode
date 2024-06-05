<?php

declare(strict_types=1);

namespace App\Tasks\Group1200;

use PHPUnit\Framework\TestCase;

final class Task1115Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1115(int $a, int $result): void
    {
        $sut = new Task1115();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
