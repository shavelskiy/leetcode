<?php

declare(strict_types=1);

namespace App\Tasks\Group2800;

use PHPUnit\Framework\TestCase;

final class Task2713Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2713(int $a, int $result): void
    {
        $sut = new Task2713();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
