<?php

declare(strict_types=1);

namespace App\Tasks\Group600;

use PHPUnit\Framework\TestCase;

final class Task594Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test594(int $a, int $result): void
    {
        $sut = new Task594();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
