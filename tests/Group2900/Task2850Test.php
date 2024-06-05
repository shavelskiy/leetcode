<?php

declare(strict_types=1);

namespace App\Tasks\Group2900;

use PHPUnit\Framework\TestCase;

final class Task2850Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2850(int $a, int $result): void
    {
        $sut = new Task2850();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
