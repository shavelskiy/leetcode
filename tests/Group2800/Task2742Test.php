<?php

declare(strict_types=1);

namespace App\Tasks\Group2800;

use PHPUnit\Framework\TestCase;

final class Task2742Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2742(int $a, int $result): void
    {
        $sut = new Task2742();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
