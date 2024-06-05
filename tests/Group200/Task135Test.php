<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task135Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test135(int $a, int $result): void
    {
        $sut = new Task135();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
