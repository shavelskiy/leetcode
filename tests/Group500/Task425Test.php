<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task425Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test425(int $a, int $result): void
    {
        $sut = new Task425();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
