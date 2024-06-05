<?php

declare(strict_types=1);

namespace App\Tasks\Group2600;

use PHPUnit\Framework\TestCase;

final class Task2535Test extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function test2535(int $a, int $result): void
    {
        $sut = new Task2535();

        self::assertSame($a, $result);
    }

    public static function dataProvider(): array
    {
        return [
            [1, 1],
        ];
    }
}
