<?php

declare(strict_types=1);

namespace App\Tasks\Group100;

use PHPUnit\Framework\TestCase;

final class Task96Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test96(int $a, int $result): void
    {
        $sut = new Task96();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
