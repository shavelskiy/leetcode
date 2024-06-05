<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task22Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test22(int $a, int $result): void
    {
        $sut = new Task22();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
