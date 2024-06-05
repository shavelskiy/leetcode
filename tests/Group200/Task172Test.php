<?php

declare(strict_types=1);

namespace App\Tasks\Group200;

use PHPUnit\Framework\TestCase;

final class Task172Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test172(int $a, int $result): void
    {
        $sut = new Task172();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
