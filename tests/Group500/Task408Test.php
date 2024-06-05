<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task408Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test408(int $a, int $result): void
    {
        $sut = new Task408();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
