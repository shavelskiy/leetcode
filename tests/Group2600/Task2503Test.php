<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2503Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2503(int $a, int $result): void
    {
        $sut = new Task2503();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
