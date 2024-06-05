<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task194Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test194(int $a, int $result): void
    {
        $sut = new Task194();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
