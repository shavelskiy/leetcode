<?php

declare(strict_types=1);

namespace App\Tasks\Group900;

use PHPUnit\Framework\TestCase;

final class Task893Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test893(int $a, int $result): void
    {
        $sut = new Task893();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
