<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task547Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test547(int $a, int $result): void
    {
        $sut = new Task547();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
