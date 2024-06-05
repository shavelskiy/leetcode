<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task586Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test586(int $a, int $result): void
    {
        $sut = new Task586();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
