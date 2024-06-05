<?php

declare(strict_types=1);

namespace App\Tasks\Group2500;

use PHPUnit\Framework\TestCase;

final class Task2459Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2459(int $a, int $result): void
    {
        $sut = new Task2459();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
