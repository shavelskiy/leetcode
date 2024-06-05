<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task588Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test588(int $a, int $result): void
    {
        $sut = new Task588();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
