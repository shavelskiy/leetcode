<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task89Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test89(int $a, int $result): void
    {
        $sut = new Task89();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
