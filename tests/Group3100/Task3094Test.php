<?php

declare(strict_types=1);

namespace App\Tasks\Group3100;

use PHPUnit\Framework\TestCase;

final class Task3094Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test3094(int $a, int $result): void
    {
        $sut = new Task3094();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
