<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task884Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test884(int $a, int $result): void
    {
        $sut = new Task884();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
