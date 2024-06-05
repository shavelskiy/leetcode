<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task50Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test50(int $a, int $result): void
    {
        $sut = new Task50();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
