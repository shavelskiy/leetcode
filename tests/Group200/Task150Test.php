<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task150Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test150(int $a, int $result): void
    {
        $sut = new Task150();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}