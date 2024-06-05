<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task85Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test85(int $a, int $result): void
    {
        $sut = new Task85();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
