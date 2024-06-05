<?php

declare(strict_types=1);

namespace App\Tasks\Group3000;

use PHPUnit\Framework\TestCase;

final class Task2966Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2966(int $a, int $result): void
    {
        $sut = new Task2966();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
