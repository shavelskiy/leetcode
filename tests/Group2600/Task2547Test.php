<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2547Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2547(int $a, int $result): void
    {
        $sut = new Task2547();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
