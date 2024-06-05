<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task809Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test809(int $a, int $result): void
    {
        $sut = new Task809();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
