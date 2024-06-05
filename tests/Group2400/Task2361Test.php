<?php

declare(strict_types=1);

namespace App\Tasks\Group2400;

use PHPUnit\Framework\TestCase;

final class Task2361Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2361(int $a, int $result): void
    {
        $sut = new Task2361();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
