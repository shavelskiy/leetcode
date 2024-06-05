<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task458Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test458(int $a, int $result): void
    {
        $sut = new Task458();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
