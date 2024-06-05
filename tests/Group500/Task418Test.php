<?php

declare(strict_types=1);

namespace App\Tasks\Group500;

use PHPUnit\Framework\TestCase;

final class Task418Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test418(int $a, int $result): void
    {
        $sut = new Task418();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
