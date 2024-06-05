<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task469Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test469(int $a, int $result): void
    {
        $sut = new Task469();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
