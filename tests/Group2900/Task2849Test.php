<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2849Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2849(int $a, int $result): void
    {
        $sut = new Task2849();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
