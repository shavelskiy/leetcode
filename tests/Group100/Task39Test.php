<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task39Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test39(int $a, int $result): void
    {
        $sut = new Task39();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
