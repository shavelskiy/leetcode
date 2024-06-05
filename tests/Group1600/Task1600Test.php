<?php

declare(strict_types=1);

namespace App\Tasks\Group1600;

use PHPUnit\Framework\TestCase;

final class Task1600Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1600(int $a, int $result): void
    {
        $sut = new Task1600();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
