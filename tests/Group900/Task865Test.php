<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task865Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test865(int $a, int $result): void
    {
        $sut = new Task865();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
