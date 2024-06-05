<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2581Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2581(int $a, int $result): void
    {
        $sut = new Task2581();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
