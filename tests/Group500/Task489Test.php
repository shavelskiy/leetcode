<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task489Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test489(int $a, int $result): void
    {
        $sut = new Task489();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
