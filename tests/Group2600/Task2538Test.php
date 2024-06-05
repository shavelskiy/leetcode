<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2538Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2538(int $a, int $result): void
    {
        $sut = new Task2538();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
