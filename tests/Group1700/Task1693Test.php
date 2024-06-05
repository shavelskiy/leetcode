<?php

declare(strict_types=1);

namespace App\Tasks\Group1700;

use PHPUnit\Framework\TestCase;

final class Task1693Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test1693(int $a, int $result): void
    {
        $sut = new Task1693();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
